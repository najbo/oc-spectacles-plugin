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
            'is_event_cltp' => 1,
            'is_date_cltp' => 1,
            'cltp_event_status_id' => 'PRIVATE',
            'cltp_date_status_id' => '',
        ]);

        Statut::create([
            'id' => 1,
            'designation' => 'Actif',
            'is_frontend' => true,
            'is_reservable' => true,
            'is_spectacle' => 1,
            'is_saison' => 1,
            'sort_order' => 2,
            'is_event_cltp' => 1,
            'is_date_cltp' => 1,
            'cltp_event_status_id' => 'PUBLIC',
            'cltp_date_status_id' => '',
        ]);  


        Statut::create([
            'designation' => 'Non publié',
            'is_frontend' => false,
            'is_spectacle' => 1,
            'is_saison' => 1,
            'sort_order' => 3,
            'is_event_cltp' => 0,
            'is_date_cltp' => 0,
        ]);  


        Statut::create([
            'designation' => 'Complet',
            'is_frontend' => true,
            'is_complet' => true,
            'is_reservable' => false,
            'sort_order' => 4,
            'is_event_cltp' => 1,
            'is_date_cltp' => 1,
            'cltp_event_status_id' => 'PUBLIC',
            'cltp_date_status_id' => 'SOLDOUT',
        ]);   

        Statut::create([
            'designation' => 'Annulé',
            'is_frontend' => true,
            'is_annule' => true,
            'is_reservable' => false,
            'sort_order' => 5,
            'is_event_cltp' => 1,
            'is_date_cltp' => 1,
            'cltp_event_status_id' => 'PUBLIC',
            'cltp_date_status_id' => 'CANCELLED',
        ]);                            

        Statut::create([
            'designation' => 'Reporté',
            'is_frontend' => true,
            'is_reporte' => true,
            'is_reservable' => false,
            'sort_order' => 6,
            'is_event_cltp' => 1,
            'is_date_cltp' => 1,
            'cltp_event_status_id' => 'PUBLIC',
            'cltp_date_status_id' => 'RESCHEDULDED',
        ]); 

        Statut::create([
            'designation' => 'Prog. - Souhait',
            'is_frontend' => false,
            'is_prog_souhait' => true,
            'sort_order' => 7,
            'is_event_cltp' => 0,
            'is_date_cltp' => 0,
        ]);                                  

        Statut::create([
            'designation' => 'Prog. - Confirmé',
            'is_frontend' => false,
            'is_prog_confirme' => true,
            'sort_order' => 8,
            'is_event_cltp' => 0,
            'is_date_cltp' => 0,
        ]);          
    }
}