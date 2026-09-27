<?php namespace Digart\Spectacles\Updates;

use Seeder;
use Digart\Spectacles\Models\Agent;

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