<?php namespace Digart\spectacles\Updates;

use Seeder;
use DigArt\Spectacles\Models\BlogEtendue;

class Seeder1033 extends Seeder
{
    public function run()
    {
        BlogEtendue::truncate();

        BlogEtendue::create([
            'designation' => 'Blog',
            'sort_order' => 1,
            'is_frontend' => 1,
        ]); 
    
        BlogEtendue::create([
            'designation' => 'Communication sur page d\'accueil',
            'sort_order' => 2,
            'is_communication' => 1,
        ]); 
        
        BlogEtendue::create([
            'designation' => 'Communication & blog',
            'sort_order' => 3,
            'is_communication' => 1,
            'is_frontend' => 1,
        ]); 

        BlogEtendue::create([
            'designation' => 'Intranet (site protégé)',
            'sort_order' => 4,
            'is_intranet' => 1,
        ]); 
    }
}