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


Route::get('api/culturoscope', function () {

	$spectacles = Spectacle::get();

	$data = [
	    'api_key' => 'RFKC1TYkrb',
	    'version' => '2.0',
	    'title' => 'Culturoscope API',
	    'events' => [],
	];

	foreach ($spectacles as $key => $spectacle) {
	    $data['events'][$key] = [
	        'event_id' => $spectacle->id,
	        'event_title' => $spectacle->titre_complet,
	        'event_description' => $spectacle->accroche,
	        'event_categories' => array($spectacle->categorie->cltp_cat_id),
	        'event_status' => $spectacle->statut->cltp_event_status_id,

	        'detail_url' =>  Url::to('spectacle').'/'.$spectacle->slug,
	        'image_url' => $spectacle->affiche->getPath(),
	        'booking_url' => $spectacle->url_reservation,
	        'booking_phone' =>  $spectacle->institution->tel_reservations,
	        'booking_mail' =>  $spectacle->institution->email_reservation,
	        'venue_name' => $spectacle->lieu->designation,
	        'venue_address' => $spectacle->lieu->adresse,
	        'venue_zip' => $spectacle->lieu->npa,
	        'venue_city' => $spectacle->lieu->localite,
	        'event_dates' => [],
	        'event_flags' => $spectacle->cltp_flags,
	        #'event_flags' => explode(', ', $spectacle->cltp_flags),
	    ];


	    foreach ($spectacle->representations as $keys => $representation) {
	    	array(
	    $data['events'][$key]['event_dates'][$keys] = [ 
	        'start_date' => $representation->debut->format('Y-m-d H:i'),
	        'date_status' => $representation->statut->cltp_date_status_id,
	    ]
	    	);
	    }



	}
	#$data = Spectacle::get()->toJson();
    return $data ;

});

