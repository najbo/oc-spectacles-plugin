<?php namespace Digart\spectacles\Updates;

use Seeder;
use DigArt\Spectacles\Models\Web;


class Seeder1036 extends Seeder
{
    public function run()
    {
        Web::truncate();

        Web::create([
            'designation' => 'Contenu statique du site web',
            'txt_programme_header' => '<p>Nous vous souhaitons de belles soirées à la <strong class="text-white">Tour de Rive</strong> et nous nous réjouissons de vous rencontrer autour d\'un verre, dans l\'ambiance chaleureuse de notre magnifique <strong class="text-white">Café-théâtre</strong> à La Neuveville.</p>',
            'title_programme_mission' => 'Notre mission',
            'txt_programme_mission' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',

            'title_abonnement' => 'Nos différents abonnements',
            'txt_abonnement' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',            
        ]); 

    }
}