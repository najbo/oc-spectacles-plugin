<?php namespace Digart\spectacles\Updates;

use Seeder;
use DigArt\Spectacles\Models\PublicationEtendue;

class Seeder1033 extends Seeder
{
    public function run()
    {
        PublicationEtendue::truncate();

        PublicationEtendue::create([
            'designation' => 'Blog',
            'sort_order' => 1,
            'is_blog' => 1,
            'is_system' => 1,
            'developpement' => 'Ces publications apparaissent sur le site public dans le menu BLOG. Il s\'agit d\'une étendue système, elle ne doit pas être effacée',
        ]); 
    
        PublicationEtendue::create([
            'designation' => 'Communication sur page d\'accueil',
            'sort_order' => 2,
            'is_communication' => 1,
            'is_system' => 1,
            'developpement' => 'Ces publications apparaissent sur le site public sur la page PROGRAMME, dans une boîte grise avant d\'éventuels spectacles. Une seule publication (la dernière) est affichée. Il s\'agit d\'une étendue système, elle ne doit pas être effacée',

        ]); 
        
        PublicationEtendue::create([
            'designation' => 'Communication & blog',
            'sort_order' => 3,
            'is_communication' => 1,
            'is_blog' => 1,
            'is_system' => 1,
            'developpement' => 'Ces publications apparaissent sur le BLOG et sur la boite grise du PROGRAMME. Il s\'agit d\'une étendue système, elle ne doit pas être effacée',

        ]); 

        PublicationEtendue::create([
            'designation' => 'Intranet (site protégé)',
            'sort_order' => 4,
            'is_intranet' => 1,
            'is_system' => 1,
            'developpement' => 'Ces publications apparaissent sur le site privé réservé aux membres (Intranet). Il s\'agit d\'une étendue système, elle ne doit pas être effacée',

        ]); 

        PublicationEtendue::create([
            'designation' => 'Tableau de bord (backend)',
            'sort_order' => 5,
            'is_dashboard' => 1,
            'is_system' => 1,
            'developpement' => 'Ces publications apparaissent sur le BACKEND des administrateurs, sur le tableau de bord. Il s\'agit d\'une étendue système, elle ne doit pas être effacée',

        ]); 
    }
}