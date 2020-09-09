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
            'cltp_cat_id' => 'TH',
            'sort_order' => 1,
        ]);
             
        Categorie::create([
            'designation' => 'Humour',
            'slug' => 'humour',
            'cltp_cat_id' => 'TH',
            'sort_order' => 2,
        ]);      
        
        Categorie::create([
            'designation' => 'Musique',
            'slug' => 'musique',
            'cltp_cat_id' => 'MU',
            'sort_order' => 3,
        ]);              

        Categorie::create([
            'designation' => 'Danse',
            'slug' => 'danse',
            'cltp_cat_id' => 'DA',
            'sort_order' => 4,
        ]);

        Categorie::create([
            'designation' => 'Contes',
            'slug' => 'contes',
            'cltp_cat_id' => 'TH',            
            'sort_order' => 5,
        ]);
  
        Categorie::create([
            'designation' => 'Marionnettes',
            'slug' => 'marionnettes',
            'cltp_cat_id' => 'TH',
            'sort_order' => 6,
        ]);
   
        Categorie::create([
            'designation' => 'Evénement',
            'slug' => 'evenement',
            'cltp_cat_id' => 'AN',
            'sort_order' => 7,
        ]);
   

    }
}