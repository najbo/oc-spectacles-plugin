<?php namespace Digart\spectacles\Updates;

use Seeder;
use DigArt\Spectacles\Models\TiersGenre;

class Seeder1053 extends Seeder
{
    public function run()
    {
        TiersGenre::truncate();

        TiersGenre::create([
            'designation' => 'Agent',
            'code' => 'agent',
            'is_societe' => true,
        ]);
        
        TiersGenre::create([
            'designation' => 'Abonné',
            'code' => 'abonne',
            'is_tiers' => true,

        ]);
        
        TiersGenre::create([
            'designation' => 'Sponsor',
            'code' => 'sponsor',
            'is_societe' => true,
        ]);        
        
        TiersGenre::create([
            'designation' => 'Autorité',
            'code' => 'autorite',
            'is_societe' => true,
            
        ]);        

        TiersGenre::create([
            'designation' => 'Photographe',
            'code' => 'photograhe',
        ]);          
    }
}