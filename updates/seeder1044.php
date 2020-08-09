<?php namespace Digart\spectacles\Updates;

use Seeder;
use DigArt\Spectacles\Models\Location;

class Seeder1044 extends Seeder
{
    public function run()
    {
        Location::truncate();

        Location::create([
            'etendue_id' => 1,
            'societe_id' => 4,
            'interlocuteur' => 'Monsieur Kraft',

            'designation' => 'Anniversaire des 75 ans',
            'adresse' => '2520 La Neuveville',
            'telephone' => '032 344 99 00',
            'email' => 'kraft@examle.org',
            'prix' => '800.00',
        ]);
             
        Location::create([
            'etendue_id' => 1,
            'societe_id' => 5,
            'designation' => 'Coronaboom',
            'interlocuteur' => 'M. Dani Koch',
            'adresse' => '3000 Berne',
            'telephone' => '032 440  99 00',
            'email' => 'dani@bigboss.com',
            'prix' => '800.00',
            'is_actif' => 0,
        ]);             
               
        Location::create([
            'etendue_id' => 1,
            'societe_id' => 7,  
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
            'etendue_id' => 1,
            'societe_id' => 6,            
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