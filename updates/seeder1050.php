<?php namespace Digart\spectacles\Updates;

use Seeder;
use DigArt\Spectacles\Models\Tiers;

class Seeder1050 extends Seeder
{
    public function run()
    {
        Tiers::truncate();

        Tiers::create([
            'raison_sociale' => 'Auchin SA',
            'prenom' => 'Catherine',
            'nom' => 'Frioud',
            'type_id' => 2,
        ]);

        Tiers::create([
            'prenom' => 'Annelise',
            'nom' => 'Hirt',
            'type_id' => 1,
        ]);  

        Tiers::create([
            'raison_sociale' => 'Estoppey-Addor SA',
            'prenom' => '',
            'nom' => '',
            'type_id' => 2,
        ]);        
        
        Tiers::create([
            'prenom' => 'Claude',
            'nom' => 'Boesch',
            'type_id' => 1,
        ]); 
        
        Tiers::create([
            'prenom' => 'Marilyne',
            'nom' => 'Boesch',
            'type_id' => 1,
        ]);       
        
        Tiers::create([
            'prenom' => 'Jan',
            'nom' => 'Boesch',
            'type_id' => 1,
        ]);                 
    }
}