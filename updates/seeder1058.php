<?php namespace Digart\spectacles\Updates;

use Seeder;
use DigArt\Spectacles\Models\Societe;


class Seeder1058 extends Seeder
{
    public function run()
    {
        Societe::truncate();

        Societe::create([
            'raison_sociale' => 'Auchin SA',
        ]);

        Societe::create([
            'raison_sociale' => 'Estoppey-Addor SA',
            'complement' => 'Traitements de surface',
        ]);           

        Societe::create([
            'raison_sociale' => 'Municipalité de La Neuveville',
        ]);        

        Societe::create([
            'raison_sociale' => 'Capsa SA',
        ]);        

        Societe::create([
            'raison_sociale' => 'BAG | OFSP',
        ]); 

        Societe::create([
            'raison_sociale' => 'Escales Production',
            'Interlocuteur' => 'Laurent Diercksen',
        ]);         

        Societe::create([
            'raison_sociale' => 'SMAD',
            'complement' => 'Service des soins à domicile',
            'interlocuteur' => 'Annelise Hirt',
        ]);                 
    }
}