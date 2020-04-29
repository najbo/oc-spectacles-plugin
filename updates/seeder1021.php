<?php namespace Digart\spectacles\Updates;

use Seeder;
use DigArt\Spectacles\Models\Categorie;

class Seeder1021 extends Seeder
{
    public function run()
    {

        Categorie::truncate();

        Categorie::create([
            'designation' => 'Concert',
        ]);
             
        Categorie::create([
            'designation' => 'Spectacle',
        ]);      
        
        Categorie::create([
            'designation' => 'Théâtre',
        ]);              

        Categorie::create([
            'designation' => 'Enfants',
        ]);
 

    }
}