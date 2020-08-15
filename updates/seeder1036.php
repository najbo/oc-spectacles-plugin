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

            'programme_header_txt' => '<p>Nous vous souhaitons de belles soirées à la <strong class="text-white">Tour de Rive</strong> et nous nous réjouissons de vous rencontrer autour d\'un verre, dans l\'ambiance chaleureuse de notre magnifique <strong class="text-white">Café-théâtre</strong> à La Neuveville.</p>',

            'programme_mission_title' => 'Notre mission',
            'programme_mission_txt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',

            'programme_location_title' => '<span class="block text-vermillion-500">Louez</span> notre salle pour vos événements',
            'programme_location_txt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',
            'programme_location_url' => '/location-salle',

            'abonnement_title' => 'Nos différents abonnements',
            'abonnement_txt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',

            'equipe_title' => 'Nos différentes équipes',
            'equipe_txt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',

            'sponsor_title' => 'Nos précieux sponsors',
            'sponsor_after_title' => 'Autres sponsors',
            'sponsor_txt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',
            'sponsor_after_txt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',

            'location_title' => 'Location de notre salle',
            'location_txt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',  
            'location_left_txt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',          
            'location_right_txt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',
            'location_url' => '/',
            'location_url_txt' => 'Vers le formulaire de contact',

            'historique_title' => 'Historique de notre institution',
            'historique_txt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',  
            'historique_left_txt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',          
            'historique_right_txt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',
            'historique_url' => '/',
            'historique_url_txt' => 'Vers le formulaire de contact',            

            'presentation_title' => 'Présentation de notre Café-Théâtre',
            'presentation_txt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',  
            'presentation_main_txt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',  
            'presentation_url' => '/dons',
            'presentation_url_txt' => 'Faire un don',

            'presentation_box1_title' => 'Notre salle est belle',
            'presentation_box1_txt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',    
            'presentation_box1_url' => '/dons',
            'presentation_box1_url_txt' => 'En savoir plus',            

            'dons_title' => 'Dons et soutien',
            'dons_txt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',  
            'txt_dons_main' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',  
            'dons_banque' => '<p>Fondation Café Théâtre La Neuveville
                Banque Raffeisen du Vignoble
                IBAN CH92 8024 1000 0092 7080 1</p>',
            'dons_url' => '/contact',
            'dons_url_txt' => 'Contactez-nous',

            'technique_title' => 'Données techniques de la salle',
            'technique_txt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',  
            'txt_technique_main' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',
            'technique_materiel_title' => 'Matériel à disposition',
            'technique_materiel_txt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',
            'technique_highlight_title' => 'Informations complémentaires',
            'technique_highlight_txt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',
            'technique_url' => 'http://www.axcess.ch',
            'technique_url_txt' => 'Accéder au site de Rémy Beuchat',

             ]);  
    }
}