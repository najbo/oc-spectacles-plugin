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
        ]);
        
        TiersGenre::create([
            'designation' => 'Abonné',
        ]);
        
        TiersGenre::create([
            'designation' => 'Sponsor',
        ]);        
        
        TiersGenre::create([
            'designation' => 'Autorité',
        ]);        
    }
}