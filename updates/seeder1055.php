<?php namespace Digart\spectacles\Updates;

use Seeder;
use DigArt\Spectacles\Models\Fonction;

class Seeder1055 extends Seeder
{
    public function run()
    {
        Fonction::truncate();

        Fonction::create([
            'designation' => 'Caisse',
            'abreviation' => 'CAIS',
        ]);
        
        Fonction::create([
            'designation' => 'Bar',
            'abreviation' => 'BAR',
        ]);
        
        Fonction::create([
            'designation' => 'Collation',
            'abreviation' => 'COL',
        ]);        
    }
}