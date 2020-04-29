<?php namespace Digart\spectacles\Updates;

use Seeder;
use DigArt\Spectacles\Models\Saison;

class Seeder1011 extends Seeder
{
    public function run()
    {

        Saison::truncate();

        Saison::create([
            'designation' => 'Saison 2020 (1)',
            'debut' => '2020-09-01',
            'fin' => '2021-08-31',
            'is_actuel' => true,
        ]);

    }
}