<?php namespace Digart\spectacles\Updates;

use Seeder;
use DigArt\Spectacles\Models\Institution;

class Seeder1012 extends Seeder
{
    public function run()
    {

        Institution::truncate();

        Institution::create([
            'designation' => 'Café Théâtre de la Tour de Rive',
            'abreviation' => 'La Tour de Rive',
            'adresse' => 'Place de la Liberté ',
            'npa' => '2520',
            'localite' => 'La Neuveville',
            'tel_principal' => '032 751 29 84',
            'entete' => 'Nous vous souhaitons de belles soirées à la <strong class="text-white">Tour de Rive</strong> et nous nous réjouissons de vous rencontrer autour d\'un verre, dans l\'ambiance chaleureuse de notre magnifique <strong class="text-white">Café-théâtre</strong> à La Neuveville.',
            'mission' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.',
            'reservation' => 'Réservation en ligne, par courrier électronique ou sur le répondeur : 032 751 29 84',
            'is_defaut' => 1,
        ]);


    }
}