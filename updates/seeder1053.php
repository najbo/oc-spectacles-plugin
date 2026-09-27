<?php namespace Digart\Spectacles\Updates;

use Seeder;
use Digart\Spectacles\Models\TiersGenre;

class Seeder1053 extends Seeder
{
    public function run()
    {
        TiersGenre::truncate();

        
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
            'is_tiers' => true,
        ]);          
    }
}