<?php namespace Digart\spectacles\Updates;

use Seeder;
use DigArt\Spectacles\Models\Tiers;

class Seeder1050 extends Seeder
{
    public function run()
    {
        Tiers::truncate();

        Tiers::create([
            'prenom' => 'Annelise',
            'nom' => 'Hirt',
        ]);       
        
        Tiers::create([
            'prenom' => 'Claude',
            'nom' => 'Boesch',
        ]); 
        
        Tiers::create([
            'prenom' => 'Marilyne',
            'nom' => 'Boesch',
        ]);       
        
        Tiers::create([
            'prenom' => 'Jan',
            'nom' => 'Boesch',
        ]);                 
    }
}