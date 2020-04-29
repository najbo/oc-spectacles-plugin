<?php namespace Digart\spectacles\Updates;

use Seeder;
use DigArt\Spectacles\Models\Statut;

class Seeder1010 extends Seeder
{
    public function run()
    {

        Statut::truncate();

        Statut::create([
            'designation' => 'Brouillon',
            'is_frontend' => false,
        ]);

        Statut::create([
            'designation' => 'Actif',
            'is_frontend' => false,
            'is_reservable' => true,
        ]);  

        Statut::create([
            'designation' => 'Complet',
            'is_frontend' => true,
            'is_complet' => true,
            'is_reservable' => false,
        ]);   

        Statut::create([
            'designation' => 'Annulé',
            'is_frontend' => true,
            'is_annule' => true,
            'is_reservable' => false,
        ]);                            
    }
}