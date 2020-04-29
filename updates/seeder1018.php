<?php namespace Digart\spectacles\Updates;

use Seeder;
use DigArt\Spectacles\Models\Artiste;

class Seeder1018 extends Seeder
{
    public function run()
    {

        Artiste::truncate();

        Artiste::create([
            'designation' => 'Thomas Wiesel',
            'slug' => 'wiesel',
        ]);
        
        
        Artiste::create([
            'designation' => 'Paolo Conte',
            'slug' => 'conte-paolo',
        ]);
        
        Artiste::create([
            'designation' => 'Jaël',
            'slug' => 'jael',
        ]);        
        

    }
}