<?php namespace Digart\spectacles\Updates;

use Seeder;
use DigArt\Spectacles\Models\Categorie;

class Seeder1021 extends Seeder
{
    public function run()
    {

        Categorie::truncate();

        Categorie::create([
            'designation' => 'Théâtre',
            'slug' => 'theatre',
            'sort_order' => 1,
        ]);
             
        Categorie::create([
            'designation' => 'Humour',
            'slug' => 'humour',
            'sort_order' => 2,
        ]);      
        
        Categorie::create([
            'designation' => 'Musique',
            'slug' => 'musique',
            'sort_order' => 3,
        ]);              

        Categorie::create([
            'designation' => 'Danse',
            'slug' => 'danse',
            'sort_order' => 4,
        ]);

        Categorie::create([
            'designation' => 'Contes',
            'slug' => 'contes',
            'sort_order' => 5,
        ]);
  
        Categorie::create([
            'designation' => 'Marionnettes',
            'slug' => 'marionnettes',
            'sort_order' => 6,
        ]);
   
        Categorie::create([
            'designation' => 'Evénement',
            'slug' => 'evenement',
            'sort_order' => 7,
        ]);
   

    }
}