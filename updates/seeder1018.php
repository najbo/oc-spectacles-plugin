<?php namespace Digart\spectacles\Updates;

use Seeder;
use DigArt\Spectacles\Models\Artiste;

class Seeder1018 extends Seeder
{
    public function run()
    {

        Artiste::truncate();

        Artiste::create([
            'designation' => 'Thomas Wiesel',
            'slug' => 'wiesel',
            'bio' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc venenatis nec libero sit amet aliquet. Sed condimentum orci non tortor pretium, non fermentum sem eleifend. Mauris laoreet elementum pellentesque. Nunc semper ut risus ac egestas. Sed ultricies hendrerit neque in lacinia. Morbi quam nibh, ultrices pellentesque sem id, viverra pellentesque sem. Sed congue elementum lacus, non scelerisque enim dictum id. Quisque tristique aliquet est accumsan vulputate. Duis tristique magna vel odio rhoncus sollicitudin. Duis justo enim, porta vitae venenatis a, sagittis id risus. Vestibulum eu auctor sapien. Nulla vel sapien interdum justo ullamcorper lobortis. Praesent fringilla vitae risus et euismod.</p>'            
        ]);
        
        
        Artiste::create([
            'designation' => 'Paolo Conte',
            'slug' => 'conte-paolo',
        ]);
        
        Artiste::create([
            'designation' => 'Jaël',
            'slug' => 'jael',
            'bio' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc venenatis nec libero sit amet aliquet. Sed condimentum orci non tortor pretium, non fermentum sem eleifend. Mauris laoreet elementum pellentesque. Nunc semper ut risus ac egestas. Sed ultricies hendrerit neque in lacinia. Morbi quam nibh, ultrices pellentesque sem id, viverra pellentesque sem. Sed congue elementum lacus, non scelerisque enim dictum id. Quisque tristique aliquet est accumsan vulputate. Duis tristique magna vel odio rhoncus sollicitudin. Duis justo enim, porta vitae venenatis a, sagittis id risus. Vestibulum eu auctor sapien. Nulla vel sapien interdum justo ullamcorper lobortis. Praesent fringilla vitae risus et euismod.</p>'
        ]);    

        Artiste::create([
            'designation' => 'Phanee de Pool',
            'nom_civil' => 'Fanny',
            'prenom_civil' => 'Diercksen',
            'slug' => 'phanee-de-pool',
        ]);       
        
    }
}