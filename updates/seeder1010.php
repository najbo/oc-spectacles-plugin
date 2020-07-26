<?php namespace Digart\spectacles\Updates;

use Seeder;
use DigArt\Spectacles\Models\Statut;

class Seeder1010 extends Seeder
{
    public function run()
    {

        Statut::truncate();

        Statut::create([
            'id' => 2,
            'designation' => 'Brouillon',
            'is_frontend' => false,
            'is_brouillon' => true,
            'sort_order' => 1,
            'is_spectacle' => 1,
            'is_saison' => 1,
        ]);

        Statut::create([
            'id' => 1,
            'designation' => 'Actif',
            'is_frontend' => true,
            'is_reservable' => true,
            'is_spectacle' => 1,
            'is_saison' => 1,
            'sort_order' => 2,
        ]);  


        Statut::create([
            'designation' => 'Non publié',
            'is_frontend' => false,
            'is_spectacle' => 1,
            'is_saison' => 1,
            'sort_order' => 3,
        ]);  


        Statut::create([
            'designation' => 'Complet',
            'is_frontend' => true,
            'is_complet' => true,
            'is_reservable' => false,
            'sort_order' => 4,
        ]);   

        Statut::create([
            'designation' => 'Annulé',
            'is_frontend' => true,
            'is_annule' => true,
            'is_reservable' => false,
            'sort_order' => 5,
        ]);                            

        Statut::create([
            'designation' => 'Prog. - Souhait',
            'is_frontend' => false,
            'is_prog_souhait' => true,
            'sort_order' => 6,
        ]);                                  

        Statut::create([
            'designation' => 'Prog. - Confirmé',
            'is_frontend' => false,
            'is_prog_confirme' => true,
            'sort_order' => 7,
        ]);          
    }
}