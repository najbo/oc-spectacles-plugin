<?php namespace Digart\spectacles\Updates;

use Seeder;
use File;
use DigArt\Spectacles\Models\Team;

class Seeder1042 extends Seeder
{
    public function run()
    {
        Team::truncate();

        Team::create([
            'titre' => 'Comité de direction',
            'texte_avant' => '<p>Nullam rhoncus aliquet diam quis ornare. In felis magna, laoreet maximus ultrices in, iaculis quis nunc. In sagittis nunc eget vulputate convallis. Quisque vel porta nunc. Vestibulum tincidunt velit ac cursus pretium. Curabitur eget rhoncus tortor. Donec condimentum elit libero. Phasellus purus felis, consectetur at nisi et, pulvinar porta lorem. Ut sit amet consequat mauris. Nam libero neque, interdum a lacus at, consequat vehicula mauris. Integer in massa accumsan, varius nibh et, suscipit nisi. Ut convallis turpis eget ligula posuere placerat.</p>',
            'texte_apres' => '<p>Nullam rhoncus aliquet diam quis ornare. In felis magna, laoreet maximus ultrices in, iaculis quis nunc. In sagittis nunc eget vulputate convallis. Quisque vel porta nunc. Vestibulum tincidunt velit ac cursus pretium. Curabitur eget rhoncus tortor. Donec condimentum elit libero. Phasellus purus felis, consectetur at nisi et, pulvinar porta lorem. Ut sit amet consequat mauris. Nam libero neque, interdum a lacus at, consequat vehicula mauris. Integer in massa accumsan, varius nibh et, suscipit nisi. Ut convallis turpis eget ligula posuere placerat.</p>',            
            'sort_order' => 1,
            'institution_id' => 1,
        ]);
        
        Team::create([
            'titre' => 'Comité de programmation',
            'texte_avant' => '<p>Nullam rhoncus aliquet diam quis ornare. In felis magna, laoreet maximus ultrices in, iaculis quis nunc. In sagittis nunc eget vulputate convallis. Quisque vel porta nunc. Vestibulum tincidunt velit ac cursus pretium. Curabitur eget rhoncus tortor. Donec condimentum elit libero. Phasellus purus felis, consectetur at nisi et, pulvinar porta lorem. Ut sit amet consequat mauris. Nam libero neque, interdum a lacus at, consequat vehicula mauris. Integer in massa accumsan, varius nibh et, suscipit nisi. Ut convallis turpis eget ligula posuere placerat.</p>',
            'texte_apres' => '<p>Nullam rhoncus aliquet diam quis ornare. In felis magna, laoreet maximus ultrices in, iaculis quis nunc. In sagittis nunc eget vulputate convallis. Quisque vel porta nunc. Vestibulum tincidunt velit ac cursus pretium. Curabitur eget rhoncus tortor. Donec condimentum elit libero. Phasellus purus felis, consectetur at nisi et, pulvinar porta lorem. Ut sit amet consequat mauris. Nam libero neque, interdum a lacus at, consequat vehicula mauris. Integer in massa accumsan, varius nibh et, suscipit nisi. Ut convallis turpis eget ligula posuere placerat.</p>',            
            'sort_order' => 2,
            'institution_id' => 1,
        ]);
        
        Team::create([
            'titre' => 'Responsabes',
            'texte_avant' => '<p>Nullam rhoncus aliquet diam quis ornare. In felis magna, laoreet maximus ultrices in, iaculis quis nunc. In sagittis nunc eget vulputate convallis. Quisque vel porta nunc. Vestibulum tincidunt velit ac cursus pretium. Curabitur eget rhoncus tortor. Donec condimentum elit libero. Phasellus purus felis, consectetur at nisi et, pulvinar porta lorem. Ut sit amet consequat mauris. Nam libero neque, interdum a lacus at, consequat vehicula mauris. Integer in massa accumsan, varius nibh et, suscipit nisi. Ut convallis turpis eget ligula posuere placerat.</p>',
            'texte_apres' => '<p>Nullam rhoncus aliquet diam quis ornare. In felis magna, laoreet maximus ultrices in, iaculis quis nunc. In sagittis nunc eget vulputate convallis. Quisque vel porta nunc. Vestibulum tincidunt velit ac cursus pretium. Curabitur eget rhoncus tortor. Donec condimentum elit libero. Phasellus purus felis, consectetur at nisi et, pulvinar porta lorem. Ut sit amet consequat mauris. Nam libero neque, interdum a lacus at, consequat vehicula mauris. Integer in massa accumsan, varius nibh et, suscipit nisi. Ut convallis turpis eget ligula posuere placerat.</p>',            
            'sort_order' => 3,
            'institution_id' => 1,
        ]);    
        
        Team::create([
            'titre' => 'A la caisse, au bar, au service repas',
            'texte_avant' => '<p>Nullam rhoncus aliquet diam quis ornare. In felis magna, laoreet maximus ultrices in, iaculis quis nunc. In sagittis nunc eget vulputate convallis. Quisque vel porta nunc. Vestibulum tincidunt velit ac cursus pretium. Curabitur eget rhoncus tortor. Donec condimentum elit libero. Phasellus purus felis, consectetur at nisi et, pulvinar porta lorem. Ut sit amet consequat mauris. Nam libero neque, interdum a lacus at, consequat vehicula mauris. Integer in massa accumsan, varius nibh et, suscipit nisi. Ut convallis turpis eget ligula posuere placerat.</p>',
            'texte_apres' => '<p>Nullam rhoncus aliquet diam quis ornare. In felis magna, laoreet maximus ultrices in, iaculis quis nunc. In sagittis nunc eget vulputate convallis. Quisque vel porta nunc. Vestibulum tincidunt velit ac cursus pretium. Curabitur eget rhoncus tortor. Donec condimentum elit libero. Phasellus purus felis, consectetur at nisi et, pulvinar porta lorem. Ut sit amet consequat mauris. Nam libero neque, interdum a lacus at, consequat vehicula mauris. Integer in massa accumsan, varius nibh et, suscipit nisi. Ut convallis turpis eget ligula posuere placerat.</p>',            
            'sort_order' => 4,
            'institution_id' => 1,
        ]); 

        Team::create([
            'titre' => 'Technique',
            'texte_avant' => '<p>Nullam rhoncus aliquet diam quis ornare. In felis magna, laoreet maximus ultrices in, iaculis quis nunc. In sagittis nunc eget vulputate convallis. Quisque vel porta nunc. Vestibulum tincidunt velit ac cursus pretium. Curabitur eget rhoncus tortor. Donec condimentum elit libero. Phasellus purus felis, consectetur at nisi et, pulvinar porta lorem. Ut sit amet consequat mauris. Nam libero neque, interdum a lacus at, consequat vehicula mauris. Integer in massa accumsan, varius nibh et, suscipit nisi. Ut convallis turpis eget ligula posuere placerat.</p>',
            'texte_apres' => '<p>Nullam rhoncus aliquet diam quis ornare. In felis magna, laoreet maximus ultrices in, iaculis quis nunc. In sagittis nunc eget vulputate convallis. Quisque vel porta nunc. Vestibulum tincidunt velit ac cursus pretium. Curabitur eget rhoncus tortor. Donec condimentum elit libero. Phasellus purus felis, consectetur at nisi et, pulvinar porta lorem. Ut sit amet consequat mauris. Nam libero neque, interdum a lacus at, consequat vehicula mauris. Integer in massa accumsan, varius nibh et, suscipit nisi. Ut convallis turpis eget ligula posuere placerat.</p>',            
            'sort_order' => 5,
            'institution_id' => 1,
        ]);                
    }
}