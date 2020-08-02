<?php namespace Digart\spectacles\Updates;

use Seeder;
use DigArt\Spectacles\Models\LocationDate;

class Seeder1046 extends Seeder
{
    public function run()
    {
        LocationDate::truncate();

        LocationDate::create([
            'location_id' => 1,
            'debut' => '2020-09-20 10:30:00',
            'fin' => '2020-09-20 20:00:00',
            'designation' => 'Mise en place',
        ]);

        LocationDate::create([
            'location_id' => 1,
            'debut' => '2020-09-21 16:30:00',
            'fin' => '2020-09-21 23:30:00',
            'designation' => 'Evénement',
        ]);

        LocationDate::create([
            'location_id' => 2,
            'debut' => '2020-07-21 12:30:00',
            'fin' => '2020-07-21 21:30:00',
            'designation' => 'Assemblée générale',
            'is_actif' => 0,
        ]);

        LocationDate::create([
            'location_id' => 2,
            'debut' => '2020-10-01 18:30:00',
            'fin' => '2020-09-01 23:30:00',
            'designation' => 'Mise en place et événement',
        ]);  

        LocationDate::create([
            'location_id' => 3,
            'debut' => '2021-07-21 12:30:00',
            'fin' => '2021-07-21 21:30:00',
            'designation' => 'Assemblée générale',
        ]);

        LocationDate::create([
            'location_id' => 5,
            'debut' => '2020-11-21 16:30:00',
            'fin' => '2020-11-23 23:30:00',
            'designation' => 'Résidence',
        ]);
    }
}