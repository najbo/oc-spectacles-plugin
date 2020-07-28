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
            'communication' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla arcu nisl, pharetra nec finibus nec, facilisis et augue. Suspendisse potenti. Suspendisse vitae aliquet est. Nulla imperdiet lobortis enim in vehicula. In sit amet fermentum tortor. In et tristique lorem. Quisque non velit id enim placerat vehicula in quis tellus. Proin enim turpis, iaculis sed cursus sit amet, dictum id neque. Ut mollis aliquam diam, ac gravida arcu vulputate id. Integer vestibulum metus quis dolor molestie, in bibendum lectus aliquam. Donec sagittis interdum sapien non pellentesque. Integer volutpat justo ut felis lobortis tristique. Pellentesque interdum urna accumsan urna tincidunt posuere. Donec in placerat purus, ac commodo turpis. Phasellus lectus dolor, pharetra ac sagittis ut, elementum at enim.',
            'communication_titre' => 'Saison 2020 suspendue !',
            
        ]);


    }
}