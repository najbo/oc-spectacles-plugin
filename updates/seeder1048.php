<?php namespace Digart\spectacles\Updates;

use Seeder;
use DigArt\Spectacles\Models\Social;

class Seeder1048 extends Seeder
{
    public function run()
    {
        Social::truncate();

        Social::create([
            'designation' => 'Site web',
            'icon' => '/Logos/Socials/www.svg',
            'iconify' => 'mdi-earth',
        ]);

        Social::create([
            'designation' => 'Youtube',
            'url' => 'https://www.youtube.com',
            'icon' => '/Logos/Socials/youtube.svg',
            'iconify' => 'mdi-youtube-play',
        ]);   
        
        Social::create([
            'designation' => 'Viméo',
            'url' => 'https://www.vimeo.com',
            'icon' => '/Logos/Socials/vimeo.svg',
            'iconify' => 'mdi-vimeo',
        ]);  
                
        Social::create([
            'designation' => 'Facebook',
            'url' => 'https://www.facebook.com',
            'icon' => '/Logos/Socials/facebook.svg',
            'iconify' => 'mdi-vimeo',
        ]);
        
        Social::create([
            'designation' => 'Instagram',
            'url' => 'https://www.instagram.com',
            'icon' => '/Logos/Socials/instagram.svg',        
            'iconify' => 'mdi-instagram',
        ]);

        Social::create([
            'designation' => 'Twitter',
            'url' => 'https://www.twitter.com',
            'icon' => 'twitter',
            'iconify' => 'mdi-twitter-box',
        ]);
    
        Social::create([
            'designation' => 'mx3',
            'url' => 'https://www.mx3.ch',
            'icon' => '/Logos/Socials/mx3.svg',
        ]);    
        
        Social::create([
            'designation' => 'Spotify',
            'url' => 'https://open.spotify.com',
            'icon' => '/Logos/Socials/spotify.svg',   
        ]);  
    }
}