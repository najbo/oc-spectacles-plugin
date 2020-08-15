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

            'title_programme_location' => '<span class="block text-vermillion-500">Louez</span> notre salle pour vos événements',
            'txt_programme_location' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',
            'url_programme_location' => '/location-salle',

            'title_abonnement' => 'Nos différents abonnements',
            'txt_abonnement' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',

            'title_equipe' => 'Nos différentes équipes',
            'txt_equipe' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',

            'title_sponsor' => 'Nos précieux sponsors',
            'title_sponsor_after' => 'Autres sponsors',
            'txt_sponsor' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',
            'txt_sponsor_after' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',

            'title_location' => 'Location de notre salle',
            'txt_location' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',  
            'txt_location_left' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',          
            'txt_location_right' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',
            'url_location' => '/',
            'url_location_texte' => 'Vers le formulaire de contact',

            'title_historique' => 'Historique de notre institution',
            'txt_historique' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',  
            'txt_historique_left' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',          
            'txt_historique_right' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',
            'url_historique' => '/',
            'url_historique_texte' => 'Vers le formulaire de contact',            

            'title_presentation' => 'Présentation de notre Café-Théâtre',
            'txt_presentation' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',  
            'txt_presentation_main' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',  
            'url_presentation' => '/dons',
            'url_presentation_texte' => 'Faire un don',

            'title_presentation_box1' => 'Notre salle est belle',
            'txt_presentation_box1' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',    
            'url_presentation_box1' => '/dons',
            'url_presentation_box1_texte' => 'En savoir plus',            

            'title_dons' => 'Dons et soutien',
            'txt_dons' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',  
            'txt_dons_main' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',  
            'txt_dons_banque' => '<p>Fondation Café Théâtre La Neuveville
                Banque Raffeisen du Vignoble
                IBAN CH92 8024 1000 0092 7080 1</p>',
            'url_dons' => '/contact',
            'url_dons_texte' => 'Contactez-nous',

            'title_technique' => 'Données techniques de la salle',
            'txt_technique' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',  
            'txt_technique_main' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',
            'title_technique_materiel' => 'Matériel à disposition',
            'txt_technique_materiel' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',
            'title_technique_highlight' => 'Informations complémentaires',
            'txt_technique_highlight' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',
            'url_technique' => 'http://www.axcess.ch',
            'url_technique_texte' => 'Accéder au site de Rémy Beuchat',

             ]);  
    }
}