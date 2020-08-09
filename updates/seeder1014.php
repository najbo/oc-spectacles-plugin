<?php namespace Digart\spectacles\Updates;

use Seeder;
use DigArt\Spectacles\Models\Genre;

class Seeder1014 extends Seeder
{
    public function run()
    {

        Genre::truncate();

        Genre::create([
            'designation' => 'Rock & pop',
            'slug' => 'rock-pop',
        ]);  

        Genre::create([
            'designation' => 'Classic',
            'slug' => 'classic',
        ]);  
        
        Genre::create([
            'designation' => 'Jazz',
            'slug' => 'jazz',
        ]);  
                
        Genre::create([
            'designation' => 'Pop',
            'slug' => 'pop',
        ]);  

        Genre::create([
            'designation' => 'Expérimental',
            'slug' => 'experimental',
        ]);          

        Genre::create([
            'designation' => 'Blues',
            'slug' => 'blues',
        ]);          

        Genre::create([
            'designation' => 'Boogie-woogie',
            'slug' => 'boogie-woogie',
        ]);  

        Genre::create([
            'designation' => 'Jeune public',
            'slug' => 'jeune-public',
        ]);  

        Genre::create([
            'designation' => 'Dramatique',
            'slug' => 'dramatique',
        ]);  

        Genre::create([
            'designation' => 'Humoristique',
            'slug' => 'humoristique',
        ]);          

        Genre::create([
            'designation' => 'Comédie',
            'slug' => 'comedie',
        ]);  

    }
}