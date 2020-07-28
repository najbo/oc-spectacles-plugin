<?php namespace Digart\Spectacles\Components;



use Cms\Classes\Page;
use Digart\Spectacles\Models\Saison;
use BackendAuth;


class Saisons extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Liste des saisons',
            'description' => 'Affiche une liste des saisons..'
        ];
    }


	public function defineProperties() {

		return [
            'detailSaison' => [
                'title'       => 'Page qui affiche le détail',
                'description' => 'Indique la page de destination du lien et qui affiche le détail d\'une saisons.',
                'type'        => 'dropdown',
                'default'     => '',
                'group'       => 'Liens',
          	]
                
		];
	}

    public function getdetailSaisonOptions()
    {
        
    	// Afficher les pages du CMS
        return Page::sortBy('baseFileName')->lists('url', 'baseFileName'); // url ou baseFileName
    }

    // This array becomes available on the page as {{ component.saisons }}


    public function posts()
    {

        // seuls les spectacles qui sont affichés en frontend sont affichés. Aucun tri par représentations !

        $user = BackendAuth::getUser();

        if ($user && $user->hasAccess('digart.spectacles.spectacles.preview')) {

            $query = Saison::orderBy('debut', 'desc')->
                whereHas('statut', function ($query) {
                    $query->where('is_frontend',1)->orWhere('is_brouillon',1);            
                })->
                with(['spectacles' => function ($query) {
                    $query->

                    whereHas('statut', function ($query) {
                        $query->where('is_frontend',1)->orWhere('is_brouillon', 1);
                });
                    }])
                ->get();

        } else {

            $query = Saison::orderBy('debut', 'desc')->
                whereHas('statut', function ($query) {
                    $query->where('is_frontend',1);            
                })->
                with(['spectacles' => function ($query) {
                    $query->

                    whereHas('statut', function ($query) {
                        $query->where('is_frontend',1);
                });
                    }])
                ->get();

        }

        return $query;
    }
}