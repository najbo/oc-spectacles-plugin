<?php namespace Digart\Spectacles\Components;



use BackendAuth;
use Carbon\Carbon;
use Cms\Classes\Page;
use Digart\Spectacles\Models\Representation;
use Digart\Spectacles\Models\Spectacle;
use Digart\Spectacles\Models\Statut;
use Illuminate\Support\Facades\DB;

class Programme extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Liste du programme',
            'description' => 'Affiche une collection des spectacles.'
        ];
    }


    public function defineProperties()
    {
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



    public $posts;
    public $user;

    public function onRun()
    {
        // $this->user = Auth::getUser();
        $this->user = BackendAuth::getUser();
        $this->posts = $this->page['posts'] = $this->loadPosts();
    }

    public function loadPosts()
    {
        // On contrôle si un administarteur super_user ou qui a accès au spectacles.preview est connecté. Permet d'afficher les spectacles brouillons.

        if ($this->user && $this->user->hasAccess('digart.spectacles.spectacles.preview')) {
            $spectacles = Spectacle::WithWhereHas('representations', function ($query) {
                $query->isActive()->whereDate('debut', '>=', Carbon::today());
            })
            ->frontendForAdmins()
            ->get()->sortBy('first_representation_active');
        } else {
            $spectacles = Spectacle::whereHas('representations', function ($query) {
                $query->isActive()->whereDate('debut', '>=', Carbon::today());
            })
            ->frontend()
            ->get()->sortBy('first_representation_active');
        }

        return $spectacles;

        ///////////////////////
        /*

        if ($this->user && $this->user->hasAccess('digart.spectacles.spectacles.preview')) {

            ///// ANCIEN CODE 
            $c =  Spectacle::whereHas('represActives')
                ->where(function($query) {
                    $query->whereHas('statut', function ($query) {
                                $query->where('is_frontend', '1')->orWhere('is_brouillon', 1);
                    })->orWhere('statut_id', null);
                });

        } else {

            $c =  Spectacle::whereHas('represActives')
                ->where(function($query) {
                    $query->whereHas('statut', function ($query) {
                                $query->where('is_frontend', '1');
                    })->orWhere('statut_id', null);
                });

        }

        // Tri :
        $c = $c->with('latestSpectacle')->get()->sortBy('latestSpectacle.debut');

        return $c;
        */

        #$order = 'desc';
        #$c = Spectacle::join('digart_spectacles_repres', 'digart_spectacles_repres.spectacle_id', '=', 'digart_spectacles_spect.id')->orderBy('digart_spectacles_repres.debut', $order)->select('digart_spectacles_spect.*')->get();

        //with et where permet de filtrer des données de l'enfant mais de ne pas restreindre l'affichage du parent s'il n'y a pas de résultat
        // WhereHas permet de filter par un enregistrement enfant.

        #dd($c);
/*        $query = Db::table('digart_spectacles_spect')->join('digart_spectacles_repres', 'digart_spectacles_spect.id', '=', 'digart_spectacles_repres.spectacle_id')
            ->orderBy('digart_spectacles_repres.created_at','Desc')
            ->groupBy('digart_spectacles_spect.id')
            ->get(); */
    }
}
