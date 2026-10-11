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
    }
}
