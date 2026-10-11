<?php namespace Digart\Spectacles\Components;

use Request;
use Cms\Classes\Page;
use Digart\Spectacles\Models\Publication as recherchePublication;


class PublicationsRecherche extends \Cms\Classes\ComponentBase
{

    public $keyword;

    
    public function componentDetails()
    {
        return [
            'name' => 'Recherche publications',
            'description' => 'Recherche du texte dans les publications'
        ];
    }



    // This array becomes available on the page as {{ component.saisons }}


    public function record()
    {

        $searchTerm = $this->keyword = Request::get('q');

        // On échappe les jokers LIKE saisis par le visiteur
        $like = '%' . addcslashes((string) $searchTerm, '%_\\') . '%';

        // Les conditions de recherche sont groupées pour que isActif() et isBlog()
        // s'appliquent aux deux colonnes (sinon le OR laisserait passer les
        // publications inactives, futures ou de l'intranet).
        $query = recherchePublication
            ::where(function ($query) use ($like) {
                $query->where('designation', 'LIKE', $like)
                    ->orWhere('accroche', 'LIKE', $like);
            })
            ->isActif()
            ->isBlog()
            ->get();
        return $query;


    }
}