<?php namespace Digart\spectacles\Updates;

use Seeder;
use DigArt\Spectacles\Models\Representation;

class Seeder1025 extends Seeder
{
    public function run()
    {

        Representation::truncate();

        Representation::create([
            'spectacle_id' => 1,
            'debut' => '2020-09-12 20:30:00',
            'lieu_id' => 1,
            'statut_id' => 1,
        ]); 
        
        Representation::create([
            'spectacle_id' => 1,
            'debut' => '2020-09-13 20:30:00',
            'lieu_id' => 1,
            'statut_id' => 2,
        ]); 
        
        Representation::create([
            'spectacle_id' => 2,
            'debut' => '2020-09-19 20:30:00',
            'lieu_id' => 1,
            'statut_id' => 1,
        ]); 
        
        Representation::create([
            'spectacle_id' => 3,
            'debut' => '2020-09-26 17:30:00',
            'lieu_id' => 1,
            'statut_id' => 1,
        ]);         

        Representation::create([
            'spectacle_id' => 4,
            'debut' => '2020-10-03 20:30:00',
            'lieu_id' => 1,
            'statut_id' => 1,
        ]);

        Representation::create([
            'spectacle_id' => 4,
            'debut' => '2020-10-04 17:30:00',
            'lieu_id' => 1,
            'statut_id' => 1,
        ]);
    }
}