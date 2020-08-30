<?php namespace Digart\Spectacles\Components;


use Event;
use Cms\Classes\Page;
use Digart\Spectacles\Models\Spectacle as detailSpectacle;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use BackendAuth;


class Spectacle extends \Cms\Classes\ComponentBase
{

    public $record;
    public $meta_title;

    public function componentDetails()
    {
        return [
            'name' => 'Détail d\'un spectacle',
            'description' => 'Affiche le détail d\'un spectacle.'
        ];
    }


	public function defineProperties() {

		return [
            'slug' => [
                'title'       => 'Adresse URL de l\'article',
                'description' => 'Adresse URL d\'accès à l\'article',
                'default'     => '{{ :slug }}',
                'type'        => 'string',
          	]
                
		];
	}


    // This array becomes available on the page as {{ component.post }}
    public function post()
    {

        # Contexte : (https://xyz.td/programme/spectacle/slug)
        # Programme = on n'affiche pas les représentations passées
        # Saison = on affiche les représentations passées
        #$contexte = $this->param('contexte');
        if (isset($_GET['archive']))  {
            $contexte = $_GET['archive'];
        }

        $user = BackendAuth::getUser();

        $slug = $this->property('slug');

        $record = new detailSpectacle;

            # $query = $post->where('slug', $slug)->firstOrFail();
            

            // On contrôle si un administarteur super_user ou qui a accès au spectacles.preview est connecté. Permet d'afficher les spectacles brouillons.

            if ($user && $user->hasAccess('digart.spectacles.spectacles.preview')) {

            $query = $record->
                whereHas('represToutes')
                    ->where(function($query) {
                        $query->whereHas('statut', function ($query) {
                                    $query->where('is_frontend','1')->orWhere('is_brouillon', 1);            
                        });
                    })->where('slug', $slug)->first();

            } else {

            $query = $record->
                whereHas('represToutes')
                    ->where(function($query) {
                        $query->whereHas('statut', function ($query) {
                                    $query->where('is_frontend','1');            
                        });
                    })->where('slug', $slug)->first();


            }
         

        $this->meta_title = 'hello';
        return $query;
    }
}