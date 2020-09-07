<?php
use Digart\Spectacles\Models\Spectacle;

/*
A mettre dans fichier de configuration ou base de données:

- API
- booking_url
- booking_phone
- booking_mail

*/


Route::get('api/culturoscope/{id?}', function ($id = null) {

	$spectacles = Spectacle::limit(20)->get();

	$data = [
	    'api_key' => 'RFKC1TYkrb',
	    'version' => 'https://jsonfeed.org/version/1',
	    'title' => 'Culturoscope API',
	    'home_page_url' => 'https://laravel-news.com/',
	    'feed_url' => 'https://laravel-news.com/feed/json',
	    'icon' => 'https://laravel-news.com/apple-touch-icon.png',
	    'favicon' => 'https://laravel-news.com/apple-touch-icon.png',
	    'events' => [],
	];

	foreach ($spectacles as $key => $spectacle) {
	    $data['events'][$key] = [
	        'event_id' => $spectacle->id,
	        'event_title' => $spectacle->titre_principal,
	        'event_description' => $spectacle->description,
	        'event_categories' => [
	            'name' => $spectacle->categorie->designation
	        ],
	        'event_status' => $spectacle->statut->designation,

	        'detail_url' => 'https://laravel-news.com/'.$spectacle->slug,
	        'image_url' => $spectacle->affiche->path,
	        'date_published' => $spectacle->created_at->tz('UTC')->toRfc3339String(),
	        'date_modified' => $spectacle->updated_at->tz('UTC')->toRfc3339String(),
	        'venue_name' => $spectacle->institution->designation,
	        'author' => [
	            'name' => $spectacle->categorie->designation
	        ],
	        'event_dates' => [],
	        'event_flags' => [],
	    ];
	}
	#$data = Spectacle::get()->toJson();
    return $data ;

});

