<?php
use Digart\Spectacles\Models\Spectacle;


Route::get('api/test', function () {
	$spectacles = Spectacle::first()->culturoscope_categories;

	return $spectacles;
});

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
	    'version' => '2.0',
	    'title' => 'Culturoscope API',
	    'events' => [],
	];

	foreach ($spectacles as $key => $spectacle) {
	    $data['events'][$key] = [
	        'event_id' => $spectacle->id,
	        'event_title' => $spectacle->titre_principal,
	        'event_description' => $spectacle->accroche,
	        'event_categories' => explode(', ', $spectacle->categorie->cltp_cat_id),
	        'event_status' => $spectacle->statut->cltp_event_status_id,

	        'detail_url' => 'https://www.latourderive.ch/spectacle/'.$spectacle->slug,
	        'image_url' => $spectacle->affiche,
	        'date_published' => $spectacle->created_at->tz('UTC')->toRfc3339String(),
	        'date_modified' => $spectacle->updated_at->tz('UTC')->toRfc3339String(),
	        'venue_name' => $spectacle->lieu->designation,
	        'venue_address' => $spectacle->lieu->adresse,
	        'venue_zip' => $spectacle->lieu->npa,
	        'venue_city' => $spectacle->lieu->localite,
	        'event_dates' => [],
	        'event_flags' => [],
	    ];
	}
	#$data = Spectacle::get()->toJson();
    return $data ;

});

