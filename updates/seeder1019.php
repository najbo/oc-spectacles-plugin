<?php namespace Digart\spectacles\Updates;

use Seeder;
use DigArt\Spectacles\Models\Agent;

class Seeder1019 extends Seeder
{
    public function run()
    {

        Agent::truncate();

        Agent::create([
            'designation' => 'Box Production',
        ]);
        
        Agent::create([
            'designation' => 'Escales Prod',
        ]);
        
        Agent::create([
            'designation' => 'Bidibup Prod Sàrl',
        ]);    

    }
}