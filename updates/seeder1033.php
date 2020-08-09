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
        ]); 
    
        PublicationEtendue::create([
            'designation' => 'Communication sur page d\'accueil',
            'sort_order' => 2,
            'is_communication' => 1,
        ]); 
        
        PublicationEtendue::create([
            'designation' => 'Communication & blog',
            'sort_order' => 3,
            'is_communication' => 1,
            'is_blog' => 1,
        ]); 

        PublicationEtendue::create([
            'designation' => 'Intranet (site protégé)',
            'sort_order' => 4,
            'is_intranet' => 1,
        ]); 
    }
}