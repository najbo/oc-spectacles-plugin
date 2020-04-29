<?php namespace Digart\spectacles\Updates;

use Seeder;
use DigArt\Spectacles\Models\Genre;

class Seeder1014 extends Seeder
{
    public function run()
    {

        Genre::truncate();

        Genre::create([
            'designation' => 'Humour',
        ]);  

        Genre::create([
            'designation' => 'Classic',
        ]);  
        
        Genre::create([
            'designation' => 'Jazz',
        ]);  
                
        Genre::create([
            'designation' => 'Pop',
        ]);  

        Genre::create([
            'designation' => 'Expérimental',
        ]);          

        Genre::create([
            'designation' => 'Blues',
        ]);          

        Genre::create([
            'designation' => 'Boogie-woogie',
        ]);  

    }
}