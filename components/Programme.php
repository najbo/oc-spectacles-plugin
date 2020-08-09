<?php namespace Digart\Spectacles\Components;



use Cms\Classes\Page;
use Digart\Spectacles\Models\Spectacle;
use Digart\Spectacles\Models\Representation;
use Digart\Spectacles\Models\Statut;
use Illuminate\Support\Facades\DB;
use BackendAuth;


class Programme extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Liste du programme',
            'description' => 'Affiche une collection des spectacles.'
        ];
    }


	public function defineProperties() {

		return [
            'detailProgramme' => [
                'title'       => 'Page qui affiche le détail',
                'description' => 'Indique la page de destination du lien et qui affiche le détail d\'une publication.',
                'type'        => 'dropdown',
                'default'     => '',
                'group'       => 'Liens',
          	]
                
		];
	}

    public function getdetailProgrammeOptions()
    {
        // Afficher les pages statiques :
        // return StaticPage::sortBy('baseFileName')->lists('url', 'url');
        
    	// Afficher les pages du CMS
        return Page::sortBy('baseFileName')->lists('url', 'baseFileName'); // url ou baseFileName
    }

    // This array becomes available on the page as {{ component.posts }}
    public function posts()
    {

        #$query = Spectacle::get();

        /*
        $c =  Spectacle::with(['representations' => function($query){
              $query->where('debut','>=', now());
            }])
            ->whereHas('representations', function ($query) {
                $query->where('debut','>=', now());            
            })
            ->where(function($query) {
                $query->whereHas('statut', function ($query) {
                            $query->where('is_frontend','1');            
                })->orWhere('statut_id', null);
            });
        */



        $user = BackendAuth::getUser();

        // On contrôle si un administarteur super_user ou qui a accès au spectacles.preview est connecté. Permet d'afficher les spectacles brouillons.
        
        if ($user && $user->hasAccess('digart.spectacles.spectacles.preview')) {

            $c =  Spectacle::whereHas('represActives')
                ->where(function($query) {
                    $query->whereHas('statut', function ($query) {
                                $query->where('is_frontend','1')->orWhere('is_brouillon', 1);            
                    })->orWhere('statut_id', null);
                });

        } else {

            $c =  Spectacle::whereHas('represActives')
                ->where(function($query) {
                    $query->whereHas('statut', function ($query) {
                                $query->where('is_frontend','1');            
                    })->orWhere('statut_id', null);
                });

        }


        // Tri :
        $c = $c->with('latestSpectacle')->get()->sortBy('latestSpectacle.debut');



        #$order = 'desc';
        #$c = Spectacle::join('digart_spectacles_repres', 'digart_spectacles_repres.spectacle_id', '=', 'digart_spectacles_spect.id')->orderBy('digart_spectacles_repres.debut', $order)->select('digart_spectacles_spect.*')->get();

        //with et where permet de filtrer des données de l'enfant mais de ne pas restreindre l'affichage du parent s'il n'y a pas de résultat
        // WhereHas permet de filter par un enregistrement enfant.

        #dd($c);
/*        $query = Db::table('digart_spectacles_spect')->join('digart_spectacles_repres', 'digart_spectacles_spect.id', '=', 'digart_spectacles_repres.spectacle_id')
            ->orderBy('digart_spectacles_repres.created_at','Desc')
            ->groupBy('digart_spectacles_spect.id')
            ->get(); */

        return $c;
    }
}