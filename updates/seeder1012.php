<?php namespace Digart\spectacles\Updates;

use Seeder;
use DigArt\Spectacles\Models\Institution;

class Seeder1012 extends Seeder
{
    public function run()
    {

        Institution::truncate();

        Institution::create([
            'designation' => 'Café Théâtre de la Tour de Rive',
            'abreviation' => 'La Tour de Rive',
            'adresse' => 'Place de la Liberté ',
            'npa' => '2520',
            'localite' => 'La Neuveville',
            'tel_principal' => '032 751 29 84',
        ]);


    }
}