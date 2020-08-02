<?php namespace Digart\spectacles\Updates;

use Seeder;
use DigArt\Spectacles\Models\Location;

class Seeder1044 extends Seeder
{
    public function run()
    {
        Location::truncate();

        Location::create([
            'loueur' => 'CAPSA SA',
            'designation' => 'Anniversaire des 50 ans',
            'interlocuteur' => 'M. André Kraft',
            'adresse' => '2520 La Neuveville',
            'telephone' => '032 344 99 00',
            'email' => 'kraft@examle.org',
            'prix' => '800.00',
        ]);
             
        Location::create([
            'loueur' => 'OFSP',
            'designation' => 'Coronaboom',
            'interlocuteur' => 'M. Dani Koch',
            'adresse' => '3000 Berne',
            'telephone' => '032 440  99 00',
            'email' => 'dani@bigboss.com',
            'prix' => '800.00',
            'is_actif' => 0,
        ]);             
               
        Location::create([
            'loueur' => 'SMAD',
            'designation' => 'Souper de Noël 2020',
            'interlocuteur' => 'Mme Annelise Hirt',
            'adresse' => '2520 La Neuveville',
            'telephone' => '079 444 99 00',
            'email' => 'annet@examle.org',
        ]);  
        
        Location::create([
            'loueur' => 'Commune de La Neuveville',
            'designation' => 'Souper de Noël 2020',
            'interlocuteur' => 'M. Vladimir Carbon',
            'adresse' => '2520 La Neuveville',
            'telephone' => '079 111 22 00',
            'email' => 'vladi@vostkok.com',
        ]); 
        
        Location::create([
            'loueur' => 'Phanee de Pool / Escales Prod.',
            'designation' => 'Résidences 2020',
            'interlocuteur' => 'Laurent Diercksen',
            'adresse' => '2502 Bienne',
            'telephone' => '079 111 22 00',
            'email' => 'laurent@cocotte.ch',
            'prix' => '2000.00',
        ]);                  
    }
}