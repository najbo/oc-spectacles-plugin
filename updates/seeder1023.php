<?php namespace Digart\spectacles\Updates;

use Seeder;
use DigArt\Spectacles\Models\Spectacle;

class Seeder1023 extends Seeder
{
    public function run()
    {

        Spectacle::create([
            'titre_principal' => 'Thomas Wiesel',
            'titre_secondaire' => 'En rodage',
            'slug' => 'en-rodage',
            #'lien_web' => 'http://www.thomaswiesel.com/',
            #'lien_youtube' => 'Qip_HOnF0_g',
            #'lien_instagram' => 'wieseltom',
            #'lien_facebook' => 'thomaswieselcomedy',
            #'lien_twitter' => 'wieselt',
            #'categorie_id' => 2,
            'admin_id' => 1,
            'statut_id' => 1,
            'saison_id' => 2,
            'accroche' =>
                "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consectetur mauris leo, vitae fringilla justo finibus eget. Phasellus mattis fringilla sagittis. Nulla eu est mollis, tempus orci eget, venenatis enim. Fusce vel egestas eros. Donec sollicitudin a tellus at ultrices. Cras pulvinar sem vitae nulla fermentum consequat. Integer consequat lacus ac orci euismod tempus. Sed ornare nibh ut justo semper sodales. Nullam egestas purus in sodales convallis. In consectetur sem eros, eget semper augue facilisis nec. Mauris at sem non arcu pharetra gravida. In hac habitasse platea dictumst. Phasellus tempor dignissim lorem, ut dignissim libero mollis ultricies. Mauris ac egestas tortor. Morbi vel vehicula elit, a fermentum libero. Ut ultrices euismod posuere.</p>",
            'developpement' =>
                "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac facilisis urna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam vitae mi et orci imperdiet aliquam. Praesent cursus enim in felis euismod, quis pretium mauris lacinia. Sed vel imperdiet turpis. Donec et orci nisi. Vivamus maximus sapien justo, a lacinia enim bibendum eget. Aliquam erat volutpat. Nulla aliquet, felis nec egestas ultricies, erat arcu luctus velit, in mattis lacus turpis ac nisl. Maecenas mollis fringilla faucibus. Maecenas augue sem, interdum sit amet leo at, tempor gravida turpis. Maecenas sit amet lectus laoreet lacus bibendum porttitor sit amet ut justo.</p><p>Mauris bibendum quam eget ex dapibus commodo. Etiam sit amet bibendum nunc. Fusce at libero ut massa aliquet gravida. Fusce ultrices libero vitae nulla semper, ac consectetur velit vestibulum. Sed non erat at nulla pretium ornare. Vestibulum sit amet nisi tincidunt massa lacinia suscipit. Donec vel hendrerit diam. Fusce interdum nec ex non hendrerit. In tempus metus quis vulputate iaculis.</p><p>Cras tincidunt, orci in sagittis finibus, leo odio efficitur odio, eget semper enim turpis at felis. Vestibulum ac pretium est. Aenean porttitor arcu ante, vitae efficitur lorem viverra ac. Mauris lectus felis, accumsan eget imperdiet a, molestie ac magna. Sed sit amet sem vitae erat posuere vulputate. Ut eu rutrum nisi. Phasellus convallis mattis libero vitae facilisis. Sed nec ullamcorper purus.</p>",
            'institution_id' => 1,
            'prix' => 'CHF 25.- (CHF 20.- enfants)',
            'duree' => '90 minutes (sans entracte)',
            'capacite_txt' => '150 places assises (dont 20 autour de tables)',
            'url_reservation' => 'https://www.booking4show.ch/latourderive/',
            'remarques_manchette' => 'Un spectacle qui va vous couper le souffle !',
        ]);

        Spectacle::create([
            'titre_principal' => 'Jaël',
            'titre_secondaire' => 'The best Tour',
            'categorie_id' => 3,
            'slug' => 'the-best-tour',
            #'lien_youtube' => '30jLN22-eZg',
            'admin_id' => 1,
            'statut_id' => 1,
            'saison_id' => 2,
            'accroche' =>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consectetur mauris leo, vitae fringilla justo finibus eget. Phasellus mattis fringilla sagittis. Nulla eu est mollis, tempus orci eget, venenatis enim. Fusce vel egestas eros. Donec sollicitudin a tellus at ultrices. Cras pulvinar sem vitae nulla fermentum consequat. Integer consequat lacus ac orci euismod tempus. Sed ornare nibh ut justo semper sodales. Nullam egestas purus in sodales convallis. In consectetur sem eros, eget semper augue facilisis nec. Mauris at sem non arcu pharetra gravida. In hac habitasse platea dictumst. Phasellus tempor dignissim lorem, ut dignissim libero mollis ultricies. Mauris ac egestas tortor. Morbi vel vehicula elit, a fermentum libero. Ut ultrices euismod posuere.",
            'developpement' =>
                "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac facilisis urna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam vitae mi et orci imperdiet aliquam. Praesent cursus enim in felis euismod, quis pretium mauris lacinia. Sed vel imperdiet turpis. Donec et orci nisi. Vivamus maximus sapien justo, a lacinia enim bibendum eget. Aliquam erat volutpat. Nulla aliquet, felis nec egestas ultricies, erat arcu luctus velit, in mattis lacus turpis ac nisl. Maecenas mollis fringilla faucibus. Maecenas augue sem, interdum sit amet leo at, tempor gravida turpis. Maecenas sit amet lectus laoreet lacus bibendum porttitor sit amet ut justo.</p><p>Mauris bibendum quam eget ex dapibus commodo. Etiam sit amet bibendum nunc. Fusce at libero ut massa aliquet gravida. Fusce ultrices libero vitae nulla semper, ac consectetur velit vestibulum. Sed non erat at nulla pretium ornare. Vestibulum sit amet nisi tincidunt massa lacinia suscipit. Donec vel hendrerit diam. Fusce interdum nec ex non hendrerit. In tempus metus quis vulputate iaculis.</p><p>Cras tincidunt, orci in sagittis finibus, leo odio efficitur odio, eget semper enim turpis at felis. Vestibulum ac pretium est. Aenean porttitor arcu ante, vitae efficitur lorem viverra ac. Mauris lectus felis, accumsan eget imperdiet a, molestie ac magna. Sed sit amet sem vitae erat posuere vulputate. Ut eu rutrum nisi. Phasellus convallis mattis libero vitae facilisis. Sed nec ullamcorper purus.</p>",
            'institution_id' => 1,
            'remarques_annonce' => 'En première Suisse',

        ]);

        Spectacle::create([
            'titre_principal' => 'Les 3 petits cochons',
            'titre_secondaire' => 'Par le théâtre Couleurs d\'ombres',
            'slug' => 'trois-petits-cochons',
            'admin_id' => 1,
            'categorie_id' => 1,
            'statut_id' => 1,
            'saison_id' => 2,
            'accroche' =>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consectetur mauris leo, vitae fringilla justo finibus eget. Phasellus mattis fringilla sagittis. Nulla eu est mollis, tempus orci eget, venenatis enim. Fusce vel egestas eros. Donec sollicitudin a tellus at ultrices. Cras pulvinar sem vitae nulla fermentum consequat. Integer consequat lacus ac orci euismod tempus. Sed ornare nibh ut justo semper sodales. Nullam egestas purus in sodales convallis. In consectetur sem eros, eget semper augue facilisis nec. Mauris at sem non arcu pharetra gravida. In hac habitasse platea dictumst. Phasellus tempor dignissim lorem, ut dignissim libero mollis ultricies. Mauris ac egestas tortor. Morbi vel vehicula elit, a fermentum libero. Ut ultrices euismod posuere.",
            'developpement' =>
                "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac facilisis urna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam vitae mi et orci imperdiet aliquam. Praesent cursus enim in felis euismod, quis pretium mauris lacinia. Sed vel imperdiet turpis. Donec et orci nisi. Vivamus maximus sapien justo, a lacinia enim bibendum eget. Aliquam erat volutpat. Nulla aliquet, felis nec egestas ultricies, erat arcu luctus velit, in mattis lacus turpis ac nisl. Maecenas mollis fringilla faucibus. Maecenas augue sem, interdum sit amet leo at, tempor gravida turpis. Maecenas sit amet lectus laoreet lacus bibendum porttitor sit amet ut justo.</p><p>Mauris bibendum quam eget ex dapibus commodo. Etiam sit amet bibendum nunc. Fusce at libero ut massa aliquet gravida. Fusce ultrices libero vitae nulla semper, ac consectetur velit vestibulum. Sed non erat at nulla pretium ornare. Vestibulum sit amet nisi tincidunt massa lacinia suscipit. Donec vel hendrerit diam. Fusce interdum nec ex non hendrerit. In tempus metus quis vulputate iaculis.</p><p>Cras tincidunt, orci in sagittis finibus, leo odio efficitur odio, eget semper enim turpis at felis. Vestibulum ac pretium est. Aenean porttitor arcu ante, vitae efficitur lorem viverra ac. Mauris lectus felis, accumsan eget imperdiet a, molestie ac magna. Sed sit amet sem vitae erat posuere vulputate. Ut eu rutrum nisi. Phasellus convallis mattis libero vitae facilisis. Sed nec ullamcorper purus.</p>",
            'institution_id' => 1,
        ]);

        Spectacle::create([
            'titre_principal' => 'Mo(r)tel',
            'titre_secondaire' => 'Création théatrâle',
            'slug' => 'mortel',
            'categorie_id' => 1,
            'admin_id' => 1,
            'statut_id' => 1,
            'saison_id' => 2,
            'accroche' =>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consectetur mauris leo, vitae fringilla justo finibus eget. Phasellus mattis fringilla sagittis. Nulla eu est mollis, tempus orci eget, venenatis enim. Fusce vel egestas eros. Donec sollicitudin a tellus at ultrices. Cras pulvinar sem vitae nulla fermentum consequat. Integer consequat lacus ac orci euismod tempus. Sed ornare nibh ut justo semper sodales. Nullam egestas purus in sodales convallis. In consectetur sem eros, eget semper augue facilisis nec. Mauris at sem non arcu pharetra gravida. In hac habitasse platea dictumst. Phasellus tempor dignissim lorem, ut dignissim libero mollis ultricies. Mauris ac egestas tortor. Morbi vel vehicula elit, a fermentum libero. Ut ultrices euismod posuere.",
            'developpement' =>
                "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac facilisis urna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam vitae mi et orci imperdiet aliquam. Praesent cursus enim in felis euismod, quis pretium mauris lacinia. Sed vel imperdiet turpis. Donec et orci nisi. Vivamus maximus sapien justo, a lacinia enim bibendum eget. Aliquam erat volutpat. Nulla aliquet, felis nec egestas ultricies, erat arcu luctus velit, in mattis lacus turpis ac nisl. Maecenas mollis fringilla faucibus. Maecenas augue sem, interdum sit amet leo at, tempor gravida turpis. Maecenas sit amet lectus laoreet lacus bibendum porttitor sit amet ut justo.</p><p>Mauris bibendum quam eget ex dapibus commodo. Etiam sit amet bibendum nunc. Fusce at libero ut massa aliquet gravida. Fusce ultrices libero vitae nulla semper, ac consectetur velit vestibulum. Sed non erat at nulla pretium ornare. Vestibulum sit amet nisi tincidunt massa lacinia suscipit. Donec vel hendrerit diam. Fusce interdum nec ex non hendrerit. In tempus metus quis vulputate iaculis.</p><p>Cras tincidunt, orci in sagittis finibus, leo odio efficitur odio, eget semper enim turpis at felis. Vestibulum ac pretium est. Aenean porttitor arcu ante, vitae efficitur lorem viverra ac. Mauris lectus felis, accumsan eget imperdiet a, molestie ac magna. Sed sit amet sem vitae erat posuere vulputate. Ut eu rutrum nisi. Phasellus convallis mattis libero vitae facilisis. Sed nec ullamcorper purus.</p>",
            'institution_id' => 1,
        ]); 

        Spectacle::create([
            'titre_principal' => 'Boogie-Woogie on Tour',
            'titre_secondaire' => '2e édition',
            'slug' => 'boogie-woogie-2020',
            'categorie_id' => 3,
            'admin_id' => 1,
            'statut_id' => 1,
            'saison_id' => 2,
            'accroche' =>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consectetur mauris leo, vitae fringilla justo finibus eget. Phasellus mattis fringilla sagittis. Nulla eu est mollis, tempus orci eget, venenatis enim. Fusce vel egestas eros. Donec sollicitudin a tellus at ultrices. Cras pulvinar sem vitae nulla fermentum consequat. Integer consequat lacus ac orci euismod tempus. Sed ornare nibh ut justo semper sodales. Nullam egestas purus in sodales convallis. In consectetur sem eros, eget semper augue facilisis nec. Mauris at sem non arcu pharetra gravida. In hac habitasse platea dictumst. Phasellus tempor dignissim lorem, ut dignissim libero mollis ultricies. Mauris ac egestas tortor. Morbi vel vehicula elit, a fermentum libero. Ut ultrices euismod posuere.",
            'developpement' =>
                "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac facilisis urna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam vitae mi et orci imperdiet aliquam. Praesent cursus enim in felis euismod, quis pretium mauris lacinia. Sed vel imperdiet turpis. Donec et orci nisi. Vivamus maximus sapien justo, a lacinia enim bibendum eget. Aliquam erat volutpat. Nulla aliquet, felis nec egestas ultricies, erat arcu luctus velit, in mattis lacus turpis ac nisl. Maecenas mollis fringilla faucibus. Maecenas augue sem, interdum sit amet leo at, tempor gravida turpis. Maecenas sit amet lectus laoreet lacus bibendum porttitor sit amet ut justo.</p><p>Mauris bibendum quam eget ex dapibus commodo. Etiam sit amet bibendum nunc. Fusce at libero ut massa aliquet gravida. Fusce ultrices libero vitae nulla semper, ac consectetur velit vestibulum. Sed non erat at nulla pretium ornare. Vestibulum sit amet nisi tincidunt massa lacinia suscipit. Donec vel hendrerit diam. Fusce interdum nec ex non hendrerit. In tempus metus quis vulputate iaculis.</p><p>Cras tincidunt, orci in sagittis finibus, leo odio efficitur odio, eget semper enim turpis at felis. Vestibulum ac pretium est. Aenean porttitor arcu ante, vitae efficitur lorem viverra ac. Mauris lectus felis, accumsan eget imperdiet a, molestie ac magna. Sed sit amet sem vitae erat posuere vulputate. Ut eu rutrum nisi. Phasellus convallis mattis libero vitae facilisis. Sed nec ullamcorper purus.</p>",
            'institution_id' => 2,
        ]); 

    }
}