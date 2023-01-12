<?php namespace Digart\Spectacles\Components;

use Cms\Classes\Page;
use Digart\Spectacles\Models\Saison as uneSaison;
use Digart\Spectacles\Models\Spectacle ;
use Digart\Spectacles\Models\Representation ;
use BackendAuth;
use Log;

class Saison extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Détail d\'une saisons',
            'description' => 'Affiche le détail d\'une saisons..'
        ];
    }





    // This array becomes available on the page as {{ component.saisons }}



    public function record()
    {
        $user = BackendAuth::getUser();

        # $slug = $this->property('slug');
        $slug = $this->param('slug');

        $record = new uneSaison;


        /*
        $query = $record->where('slug', $slug)->
            whereHas('spectacles.statut', function ($query) {
                $query->where('is_frontend',1);
            })->

        first();



        $query = $record->where('slug', $slug)->
            with(['spectacles.statut' => function ($query) {
                $query->where('is_frontend', 1);
                }])
            ->
        first();


        $query = $record->where('slug', $slug)->first();

        */

        // On contrôle si un administarteur super_user ou qui a accès au spectacles.preview est connecté. Permet d'afficher les saisons brouillons.



        if ($user && $user->hasAccess('digart.spectacles.spectacles.preview')) {
            /*
            $query = $record->where('slug', $slug)->
                with(['spectacles' => function ($query) {
                    $query->whereHas('statut', function ($query) {
                        $query->where('is_frontend',1)->orWhere('is_brouillon', 1);            
                });
                    }])
                ->first();
            
            

            $query = $record->where('slug', $slug)->
                with(['spectacles' => function ($query) {
                    $query->

                    whereHas('representations', function ($query) {
                        $query->whereHas('statut', function ($query) {
                            $query->where('is_frontend',1);
                });
                    })->

                    whereHas('statut', function ($query) {
                        $query->where('is_frontend',1);
                });
                    }])
                ->first();




            // Cette syntaxe affiche les spectacles qui n'ont pas de dates de représentations.

            $query = $record->where('slug', $slug)->
                with(['spectacles' => function ($query) {
                    $query->

                    with(['representations' => function ($query) {
                        $query->whereHas('statut', function ($query) {
                            $query->where('is_frontend',1)->orWhere('is_brouillon', 1);
                });
                    }])->

                    whereHas('statut', function ($query) {
                        $query->where('is_frontend',1)->orWhere('is_brouillon', 1);
                });
                    }])
                ->first();

            // Si on veut filtrer aussi par représentations
            $query = $record->where('slug', $slug)->
                with(['spectacles' => function ($query) {
                    $query->

                    with(['representations' => function ($query) {
                        $query->whereHas('statut', function ($query) {
                            $query->where('is_frontend',1)->orWhere('is_brouillon', 1);
                });
                    }])->

                    whereHas('statut', function ($query) {
                        $query->where('is_frontend',1)->orWhere('is_brouillon', 1);
                });
                    }])
                ->first();
            
            */




            $query = $record->where('slug', $slug)->
                with(['spectacles' => function ($query) {
                    $query->

                    with(['representations' => function ($query) {
                        $query->whereHas('statut', function ($query) {
                            $query->where('is_frontend', 1)->orWhere('is_brouillon', 1);
                        });
                            }])->

                    whereHas('statut', function ($query) {
                        $query->where('is_frontend', 1)->orWhere('is_brouillon', 1);
                })->orderBy('titre_principal');
                    }])
                ->first();

            } else {

            $query = $record->where('slug', $slug)->
                with(['spectacles' => function ($query) {
                    $query->

                    with(['representations' => function ($query) {
                        $query->whereHas('statut', function ($query) {
                            $query->where('is_frontend',1);
                });
                    }])->

                    whereHas('statut', function ($query) {
                        $query->where('is_frontend', 1);
                })->orderBy('titre_principal');
                    }])
                ->first();
            }

            $query = $record->where('slug', $slug)->first();

            $query = $record->where('slug', $slug)
                ->with(['spectacles' => function($query) {
                        $query->orderBy('titre_principal');
                }])
                ->first();

            $query = $record->where('slug', $slug)
                ->with(['spectacles' => function($query) {
                        $query->
                            with(['representations' => function($query) {
                                $query->orderBy('debut', 'ASC');
                            }])
                        ->orderBy('titre_principal');
                }])
                ->first();

        // On se positionne ici directement sur un spectacle ;
        // Utiliser la page saison_test.html

        $query = Spectacle::where('saison_id', 21)
            ->addSelect(['start' => Representation::selectRaw('min(debut) as min_debut')
                     ->whereColumn('spectacle_id', 'digart_spectacles_spect.id')
                     ->groupBy('spectacle_id')
                 ])
                 ->orderBy('start', 'ASC')
                 ->get();



        return $query;
    }

    public function spectacles()
    {
        $user = BackendAuth::getUser();

        # $slug = $this->property('slug');
        //$sortByTitle = false;
        $slug = $this->param('slug');
        $sortByTitle = $this->param('orderByTitle');
        $showDrafts = $user && $user->hasAccess('digart.spectacles.spectacles.preview');

        $query = Spectacle::
            whereHas('saison', function ($query) use ($slug) {
                        $query->where('slug', $slug);
            })

            ->whereHas('statut', function ($query) use ($showDrafts) {
                $query->where('is_frontend', 1)
                    ->when($showDrafts, function ($query) {
                        $query->orWhere('is_brouillon', 1);
                    });
            })

            ->whereHas('representations', function ($query) use ($showDrafts) {
                $query->whereHas('statut', function ($query) use ($showDrafts) {
                    $query->where('is_frontend', 1)
                    ->when($showDrafts, function ($query) {
                        $query->orWhere('is_brouillon', 1);
                    });
                });
            })

            ->addSelect(['premiere_date' => Representation::selectRaw('min(debut) as min_debut')
                     ->whereColumn('spectacle_id', 'digart_spectacles_spect.id')
                     ->groupBy('spectacle_id')
                ])
                // Tri par défaut si pas de slug  : orderBy('premiere_date', 'asc')
                ->when($sortByTitle, function ($query, $sortByTitle) {
                    $query->orderBy('titre_principal');
                }, function ($query) {
                    $query->orderBy('premiere_date');
                })

                 ->get();
        return $query;
    }
}
