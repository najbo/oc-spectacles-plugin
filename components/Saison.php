<?php namespace Digart\Spectacles\Components;

use Cms\Classes\Page;
use Digart\Spectacles\Models\Saison as uneSaison;
use BackendAuth;


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
                            $query->where('is_frontend',1)->orWhere('is_brouillon', 1);
                });
                    }])->

                    whereHas('statut', function ($query) {
                        $query->where('is_frontend',1)->orWhere('is_brouillon', 1);
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
                        $query->where('is_frontend',1);
                })->orderBy('titre_principal');
                    }])
                ->first();

            }


            
        return $query;
    }
}