<?php namespace Digart\Spectacles\Components;

use Digart\Spectacles\Models\Spectacle as detailSpectacle;
use BackendAuth;


class Spectacle extends \Cms\Classes\ComponentBase
{

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
        # Contexte : (https://xyz.td/spectacle/slug)

        $user = BackendAuth::getUser();

        $slug = $this->property('slug');

        // On contrôle si un administarteur super_user ou qui a accès au spectacles.preview est connecté. Permet d'afficher les spectacles brouillons.

        if ($user && $user->hasAccess('digart.spectacles.spectacles.preview')) {

            $query = detailSpectacle::
                whereHas('represToutes')
                    ->where(function($query) {
                        $query->whereHas('statut', function ($query) {
                                    $query->where('is_frontend','1')->orWhere('is_brouillon', 1);
                        });
                    })->where('slug', $slug)->first();

        } else {

            $query = detailSpectacle::
                whereHas('represToutes')
                    ->where(function($query) {
                        $query->whereHas('statut', function ($query) {
                                    $query->where('is_frontend','1');
                        });
                    })->where('slug', $slug)->first();

        }

        return $query;
    }
}
