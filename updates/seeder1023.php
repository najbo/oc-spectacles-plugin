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
            'accroche' =>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consectetur mauris leo, vitae fringilla justo finibus eget. Phasellus mattis fringilla sagittis. Nulla eu est mollis, tempus orci eget, venenatis enim. Fusce vel egestas eros. Donec sollicitudin a tellus at ultrices. Cras pulvinar sem vitae nulla fermentum consequat. Integer consequat lacus ac orci euismod tempus. Sed ornare nibh ut justo semper sodales. Nullam egestas purus in sodales convallis. In consectetur sem eros, eget semper augue facilisis nec. Mauris at sem non arcu pharetra gravida. In hac habitasse platea dictumst. Phasellus tempor dignissim lorem, ut dignissim libero mollis ultricies. Mauris ac egestas tortor. Morbi vel vehicula elit, a fermentum libero. Ut ultrices euismod posuere.",
            'developpement' =>
                "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac facilisis urna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam vitae mi et orci imperdiet aliquam. Praesent cursus enim in felis euismod, quis pretium mauris lacinia. Sed vel imperdiet turpis. Donec et orci nisi. Vivamus maximus sapien justo, a lacinia enim bibendum eget. Aliquam erat volutpat. Nulla aliquet, felis nec egestas ultricies, erat arcu luctus velit, in mattis lacus turpis ac nisl. Maecenas mollis fringilla faucibus. Maecenas augue sem, interdum sit amet leo at, tempor gravida turpis. Maecenas sit amet lectus laoreet lacus bibendum porttitor sit amet ut justo.</p><p>Mauris bibendum quam eget ex dapibus commodo. Etiam sit amet bibendum nunc. Fusce at libero ut massa aliquet gravida. Fusce ultrices libero vitae nulla semper, ac consectetur velit vestibulum. Sed non erat at nulla pretium ornare. Vestibulum sit amet nisi tincidunt massa lacinia suscipit. Donec vel hendrerit diam. Fusce interdum nec ex non hendrerit. In tempus metus quis vulputate iaculis.</p><p>Cras tincidunt, orci in sagittis finibus, leo odio efficitur odio, eget semper enim turpis at felis. Vestibulum ac pretium est. Aenean porttitor arcu ante, vitae efficitur lorem viverra ac. Mauris lectus felis, accumsan eget imperdiet a, molestie ac magna. Sed sit amet sem vitae erat posuere vulputate. Ut eu rutrum nisi. Phasellus convallis mattis libero vitae facilisis. Sed nec ullamcorper purus.</p>",
            'institution_id' => 1,
        ]);

        Spectacle::create([
            'titre_principal' => 'Jaël',
            'titre_secondaire' => 'The best Tour',
            'accroche' =>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consectetur mauris leo, vitae fringilla justo finibus eget. Phasellus mattis fringilla sagittis. Nulla eu est mollis, tempus orci eget, venenatis enim. Fusce vel egestas eros. Donec sollicitudin a tellus at ultrices. Cras pulvinar sem vitae nulla fermentum consequat. Integer consequat lacus ac orci euismod tempus. Sed ornare nibh ut justo semper sodales. Nullam egestas purus in sodales convallis. In consectetur sem eros, eget semper augue facilisis nec. Mauris at sem non arcu pharetra gravida. In hac habitasse platea dictumst. Phasellus tempor dignissim lorem, ut dignissim libero mollis ultricies. Mauris ac egestas tortor. Morbi vel vehicula elit, a fermentum libero. Ut ultrices euismod posuere.",
            'developpement' =>
                "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac facilisis urna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam vitae mi et orci imperdiet aliquam. Praesent cursus enim in felis euismod, quis pretium mauris lacinia. Sed vel imperdiet turpis. Donec et orci nisi. Vivamus maximus sapien justo, a lacinia enim bibendum eget. Aliquam erat volutpat. Nulla aliquet, felis nec egestas ultricies, erat arcu luctus velit, in mattis lacus turpis ac nisl. Maecenas mollis fringilla faucibus. Maecenas augue sem, interdum sit amet leo at, tempor gravida turpis. Maecenas sit amet lectus laoreet lacus bibendum porttitor sit amet ut justo.</p><p>Mauris bibendum quam eget ex dapibus commodo. Etiam sit amet bibendum nunc. Fusce at libero ut massa aliquet gravida. Fusce ultrices libero vitae nulla semper, ac consectetur velit vestibulum. Sed non erat at nulla pretium ornare. Vestibulum sit amet nisi tincidunt massa lacinia suscipit. Donec vel hendrerit diam. Fusce interdum nec ex non hendrerit. In tempus metus quis vulputate iaculis.</p><p>Cras tincidunt, orci in sagittis finibus, leo odio efficitur odio, eget semper enim turpis at felis. Vestibulum ac pretium est. Aenean porttitor arcu ante, vitae efficitur lorem viverra ac. Mauris lectus felis, accumsan eget imperdiet a, molestie ac magna. Sed sit amet sem vitae erat posuere vulputate. Ut eu rutrum nisi. Phasellus convallis mattis libero vitae facilisis. Sed nec ullamcorper purus.</p>",
            'institution_id' => 1,
        ]);

        Spectacle::create([
            'titre_principal' => 'Les 3 petits cochons',
            'titre_secondaire' => 'Par le théâtre Couleurs d\'ombres',
            'accroche' =>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consectetur mauris leo, vitae fringilla justo finibus eget. Phasellus mattis fringilla sagittis. Nulla eu est mollis, tempus orci eget, venenatis enim. Fusce vel egestas eros. Donec sollicitudin a tellus at ultrices. Cras pulvinar sem vitae nulla fermentum consequat. Integer consequat lacus ac orci euismod tempus. Sed ornare nibh ut justo semper sodales. Nullam egestas purus in sodales convallis. In consectetur sem eros, eget semper augue facilisis nec. Mauris at sem non arcu pharetra gravida. In hac habitasse platea dictumst. Phasellus tempor dignissim lorem, ut dignissim libero mollis ultricies. Mauris ac egestas tortor. Morbi vel vehicula elit, a fermentum libero. Ut ultrices euismod posuere.",
            'developpement' =>
                "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac facilisis urna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam vitae mi et orci imperdiet aliquam. Praesent cursus enim in felis euismod, quis pretium mauris lacinia. Sed vel imperdiet turpis. Donec et orci nisi. Vivamus maximus sapien justo, a lacinia enim bibendum eget. Aliquam erat volutpat. Nulla aliquet, felis nec egestas ultricies, erat arcu luctus velit, in mattis lacus turpis ac nisl. Maecenas mollis fringilla faucibus. Maecenas augue sem, interdum sit amet leo at, tempor gravida turpis. Maecenas sit amet lectus laoreet lacus bibendum porttitor sit amet ut justo.</p><p>Mauris bibendum quam eget ex dapibus commodo. Etiam sit amet bibendum nunc. Fusce at libero ut massa aliquet gravida. Fusce ultrices libero vitae nulla semper, ac consectetur velit vestibulum. Sed non erat at nulla pretium ornare. Vestibulum sit amet nisi tincidunt massa lacinia suscipit. Donec vel hendrerit diam. Fusce interdum nec ex non hendrerit. In tempus metus quis vulputate iaculis.</p><p>Cras tincidunt, orci in sagittis finibus, leo odio efficitur odio, eget semper enim turpis at felis. Vestibulum ac pretium est. Aenean porttitor arcu ante, vitae efficitur lorem viverra ac. Mauris lectus felis, accumsan eget imperdiet a, molestie ac magna. Sed sit amet sem vitae erat posuere vulputate. Ut eu rutrum nisi. Phasellus convallis mattis libero vitae facilisis. Sed nec ullamcorper purus.</p>",
            'institution_id' => 1,
        ]);
    }
}