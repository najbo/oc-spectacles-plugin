<?php
use Digart\Spectacles\Models\Spectacle;


Route::get('api/test', function () {
	$spectacles = Spectacle::get()->sortBy('representations.debut');
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

	$api_key = env('API_KEY_CULTUROSCOPE');

	if ($api_key)
	{
		#$spectacles = Spectacle::get();
		$spectacles = Spectacle::avecAffiche()->
			isStatutSpectacleCulturoscope()->avecRepresentationsCulturoscope()->get();

		$data = [
		    'api_key' => $api_key,
		    'version' => '2.0',
		    'title' => 'Culturoscope API',
		    'events' => [],
		];

		foreach ($spectacles as $key => $spectacle) {

			$event_categories = array($spectacle->categorie->cltp_cat_id);
			$event_status = $spectacle->statut->cltp_event_status_id;
			$detail_url = Url::to('spectacle').'/'.$spectacle->slug;

			if ( 1 == 1) {

			    $data['events'][$key] = [
			        'event_id' => $spectacle->id,
			        'event_title' => $spectacle->titre_complet,
			        'event_description' => $spectacle->accroche,
			        'event_categories' => $event_categories,
			        'event_status' => $event_status,

			        'detail_url' =>  $detail_url,
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


		}
		#$data = Spectacle::get()->toJson();
	    return $data ;
	  } else {
	  	return 'API not definied in .env file (API_CULTUROSCOPE)';
	  }

});

