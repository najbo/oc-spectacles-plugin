<?php namespace Digart\spectacles\Updates;

use Seeder;
use DigArt\Spectacles\Models\ProtocoleGenre;

class Seeder1030 extends Seeder
{
    public function run()
    {
        ProtocoleGenre::truncate();

        ProtocoleGenre::create([
            'designation' => 'Prise de contact',
            'sort_order' => 1,
        ]); 
        
        ProtocoleGenre::create([
            'designation' => 'Négociation de contrat / cachet',
            'sort_order' => 2,
        ]); 
 
         ProtocoleGenre::create([
            'designation' => 'Gestion de la technique',
            'sort_order' => 3,
        ]);  
 
          ProtocoleGenre::create([
            'designation' => 'Son',
            'sort_order' => 4,
        ]);  
 
         ProtocoleGenre::create([
            'designation' => 'Lumières',
            'sort_order' => 5,
        ]);  
        
        ProtocoleGenre::create([
            'designation' => 'Accueil & agrément',
            'sort_order' => 6,
        ]);
        
        
        ProtocoleGenre::create([
            'designation' => 'Hébergement',
            'sort_order' => 7,
        ]);  
        
        ProtocoleGenre::create([
            'designation' => 'Planification des bénévoles',
            'sort_order' => 8,
        ]);        
    }
}