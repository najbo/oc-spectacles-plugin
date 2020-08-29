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

        $query = recherchePublication
           ::where('designation', 'LIKE', "%{$searchTerm}%") 
           ->orWhere('accroche', 'LIKE', "%{$searchTerm}%") 
           ->isActif()->get();
        return $query;


    }
}