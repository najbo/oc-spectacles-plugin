<?php namespace Digart\spectacles\Models;

use Model;

/**
 * Model
 */
class Statut extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_spectacles_statuts';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'designation' => 'required',
    ];


    // Filtre la liste déroulante sur spectacles pour n'afficher que les statuts pour les spectacles (is_spectacle) :
    
    public function scopeSpectacle($query) {

        return $query->where('is_spectacle',1);

    }


    // Filtre la liste déroulante sur le formulaire des saisons pour n'afficher que les statuts pour les saisons (is_saison) :

    public function scopeSaison($query) {

        return $query->where('is_saison',1);
        
    }    

  

    public function getCltpEventStatusIdOptions()
    {
        $api_key = env('API_KEY_CULTUROSCOPE');

        $url = 'https://www.culturoscope.ch/api/2.0/events_status.php?api_key='.$api_key;
        
        $JSON = @file_get_contents($url);

        $data = json_decode($JSON, true);

        if (!is_array($data))
        {
            // Pas de connexion au serveur du Cultursocope ; on affiche alors des valeurs par défaut.
            return array(
                'PRIVATE' => 'Publié uniquement dans l\'agenda prévisionnel',
                'PUBLIC' => 'Publié dans le culturoscoPe et dans l\'agenda prévisionnel',
                );

        } else {
            
            $data = json_decode($JSON, true);

            $status = [];

            foreach($data as $item) {
                $status[$item['event_status_code']] = $item['event_status_title'];
            }

            return $status;
        }
    }




    public function getCltpDateStatusIdOptions()
    {

        $api_key = env('API_KEY_CULTUROSCOPE');

        $url = 'https://www.culturoscope.ch/api/2.0/events_dates_status.php?api_key='.$api_key;
        
        $JSON = @file_get_contents($url);

        $data = json_decode($JSON, true);

        if (!is_array($data))
        {
            // Pas de connexion au serveur du Cultursocope ; on affiche alors des valeurs par défaut.
            return array(
                'CANCELLED' => 'Annulé',
                'RESCHEDULDED' => 'Reporté',
                'SOLDOUT' => 'Complet',
                );

        } else {
            
            $data = json_decode($JSON, true);

            $status = [];

            foreach($data as $item) {
                $status[$item['event_date_status_code']] = $item['event_date_status_title'];
            }
     

            return $status;
        }
    }


    // Permet de cacher le champ des tags pour le Culturoscope s'il n'y a pas de clé API_KEY_CULTUROSCOPE définie dans .ENV
    public function filterFields($fields, $context = null){

        if (! env('API_KEY_CULTUROSCOPE') ) {

              $fields->section_culturoscope_event->hidden = true;
              $fields->is_event_cltp->hidden = true;
              $fields->cltp_event_status_id->hidden = true;

              $fields->section_culturoscope_date->hidden = true;
              $fields->is_date_cltp->hidden = true;
              $fields->cltp_date_status_id->hidden = true;
        } 
    } 

}
