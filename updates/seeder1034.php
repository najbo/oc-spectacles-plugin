<?php namespace Digart\spectacles\Updates;

use Seeder;
use DigArt\Spectacles\Models\Blog;

class Seeder1034 extends Seeder
{
    public function run()
    {
        Blog::truncate();

        Blog::create([
            'designation' => 'Saison 2020/21 dévoilée',
            'slug' => 'saison-2020-21',
            'debut' => '2020-07-20',
            'etendue_id' => 2,
            'admin_id' => 1,
            'accroche' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque posuere ligula sed dictum egestas. Mauris semper arcu et magna accumsan efficitur sit amet at purus. Etiam nec nisi faucibus, porta odio id, pretium ligula. Fusce sodales velit sed mauris tempor, id auctor neque sodales. Sed rhoncus eleifend magna id ornare. Aenean luctus in risus vel porttitor. Mauris ultrices risus ut mi ultrices, id porttitor quam viverra. Sed finibus, diam eget convallis pellentesque, urna nibh accumsan dolor, non dictum enim lectus condimentum purus. Ut semper leo turpis. Nam viverra est vitae viverra suscipit.</p>',
            'url' => 'http://www.latourderive.ch',
            'is_url_externe' => true,
        ]); 

        Blog::create([
            'designation' => 'Saison 2020 annulée',
            'slug' => 'covid-2020',
            'debut' => '2020-07-27',
            'etendue_id' => 1,
            'admin_id' => 1,
            'accroche' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque posuere ligula sed dictum egestas. Mauris semper arcu et magna accumsan efficitur sit amet at purus. Etiam nec nisi faucibus, porta odio id, pretium ligula. Fusce sodales velit sed mauris tempor, id auctor neque sodales. Sed rhoncus eleifend magna id ornare. Aenean luctus in risus vel porttitor. Mauris ultrices risus ut mi ultrices, id porttitor quam viverra. Sed finibus, diam eget convallis pellentesque, urna nibh accumsan dolor, non dictum enim lectus condimentum purus. Ut semper leo turpis. Nam viverra est vitae viverra suscipit.</p>',
        ]);

        Blog::create([
            'designation' => 'Nouveau site web',
            'slug' => 'nouveau-site-web',
            'debut' => '2020-07-28',
            'etendue_id' => 1,
            'admin_id' => 1,
            'accroche' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque posuere ligula sed dictum egestas. Mauris semper arcu et magna accumsan efficitur sit amet at purus. Etiam nec nisi faucibus, porta odio id, pretium ligula. Fusce sodales velit sed mauris tempor, id auctor neque sodales. Sed rhoncus eleifend magna id ornare. Aenean luctus in risus vel porttitor. Mauris ultrices risus ut mi ultrices, id porttitor quam viverra. Sed finibus, diam eget convallis pellentesque, urna nibh accumsan dolor, non dictum enim lectus condimentum purus. Ut semper leo turpis. Nam viverra est vitae viverra suscipit.</p>',
        ]);

        Blog::create([
            'designation' => 'Décès de Michel Tschampion',
            'slug' => 'michel',
            'debut' => '2020-06-28',
            'etendue_id' => 1,
            'admin_id' => 1,
            'accroche' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque posuere ligula sed dictum egestas. Mauris semper arcu et magna accumsan efficitur sit amet at purus. Etiam nec nisi faucibus, porta odio id, pretium ligula. Fusce sodales velit sed mauris tempor, id auctor neque sodales. Sed rhoncus eleifend magna id ornare. Aenean luctus in risus vel porttitor. Mauris ultrices risus ut mi ultrices, id porttitor quam viverra. Sed finibus, diam eget convallis pellentesque, urna nibh accumsan dolor, non dictum enim lectus condimentum purus. Ut semper leo turpis. Nam viverra est vitae viverra suscipit.</p>',
        ]);

        Blog::create([
            'designation' => 'Nouvelle équipe de programmation',
            'slug' => 'equipe-programmation',
            'debut' => '2020-06-29',
            'etendue_id' => 1,
            'admin_id' => 1,
            'accroche' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque posuere ligula sed dictum egestas. Mauris semper arcu et magna accumsan efficitur sit amet at purus. Etiam nec nisi faucibus, porta odio id, pretium ligula. Fusce sodales velit sed mauris tempor, id auctor neque sodales. Sed rhoncus eleifend magna id ornare. Aenean luctus in risus vel porttitor. Mauris ultrices risus ut mi ultrices, id porttitor quam viverra. Sed finibus, diam eget convallis pellentesque, urna nibh accumsan dolor, non dictum enim lectus condimentum purus. Ut semper leo turpis. Nam viverra est vitae viverra suscipit.</p>',
        ]);                      
    }
}