<?php namespace Digart\spectacles\Updates;

use Seeder;
use DigArt\Spectacles\Models\ProtocoleStatut;

class Seeder1028 extends Seeder
{
    public function run()
    {
        
        ProtocoleStatut::truncate();

        ProtocoleStatut::create([
            'designation' => 'En cours',
            'sort_order' => 1,
        ]); 
        
        ProtocoleStatut::create([
            'designation' => 'Terminé',
            'sort_order' => 2,
        ]); 
    }
}