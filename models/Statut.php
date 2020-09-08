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


    // Filtre la liste déroulante sur saisons pour n'afficher que les statuts pour les saisons (is_saison) :

    public function scopeSaison($query) {

        return $query->where('is_saison',1);
        
    }    

    public function getCulturoscopeStatusAttribute()
    {
        $url = 'https://www.culturoscope.ch/api/2.0/events_status.php?api_key=CS-AFQWpUBJSw';
        
        $JSON = @file_get_contents($url);

        $data = json_decode($JSON, true);

        if ($JSON === false)
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

    public function getCltpStatusIdOptions()
    {
        return $this->culturoscope_status;
    }

}
