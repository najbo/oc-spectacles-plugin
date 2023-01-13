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
        $showDrafts = $user && $user->hasAccess('digart.spectacles.spectacles.preview');



        $query = $record::where('slug', $slug)
            ->whereHas('statut', function ($query) use ($showDrafts) {
                $query->where('is_frontend', 1)
                    ->when($showDrafts, function ($query) {
                        $query->orWhere('is_brouillon', 1);
                    });
                })
        ->first();

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
