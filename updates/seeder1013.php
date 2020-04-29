<?php namespace Digart\spectacles\Updates;

use Seeder;
use DigArt\Spectacles\Models\Lieu;

class Seeder1013 extends Seeder
{
    public function run()
    {

        Lieu::truncate();

        Lieu::create([
            'designation' => 'La Tour de Rive',
            'adresse' => 'Place de la Liberté',
            'npa' => '2520',
            'localite' => 'La Neuveville',
        ]);
        
        Lieu::create([
            'designation' => 'Scène de la Zone piétonne',
            'adresse' => 'Place de la Liberté',
            'npa' => '2520',
            'localite' => 'La Neuveville',
        ]);        

        Lieu::create([
            'designation' => 'Cour de Berne',
            'adresse' => 'Rue du Port 14',
            'npa' => '2520',
            'localite' => 'La Neuveville',
        ]);  

    }
}