<?php namespace Digart\spectacles\Models;

use Model;
use BackendAuth;
use Carbon\Carbon;

/**
 * Model
 */
class LocationDate extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at', 'debut', 'fin'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_spectacles_locdates';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'debut' => 'required',
        'fin' => 'required'
    ]; 

    public $belongsTo = [
        'location' => ['DigArt\Spectacles\Models\Location'],                  
    ];


    public function scopeIsActif($query) {
        return $query->where('is_actif',1)->whereDate('fin', '>=', Carbon::today()->toDateString())->orderBy('debut');
    }

    public function scopeIsFrontend($query)
    {
        return $query->isActif()->where('is_frontend',1);
    }

    public function scopeIsLocationFrontend($query)
    {

        return $query->
            whereHas('location', function ($query) {
                $query->where('is_actif','1')->where('is_frontend','1');            
            });
    }

    // Utilisé pour le tri des locations. Voir relation latestLocationDate
    public function scopeTri($query)
    {
        return $query->orderBy('debut');
    }



    public function getPeriodeAttribute()
    {
        $debut = $this->debut->format('Y-m-d');
        $fin = $this->fin->format('Y-m-d');

        if ($debut == $fin) {
            if ($this->debut->format('H:i') == '00:00' && $this->fin->format('H:i') == '00:00')
            {
                return ucfirst($this->debut->format('D')). '. <strong>' . $this->debut->format('d.m.y').'</strong>';
            } else {
                return ucfirst($this->debut->format('D')). '. <strong>' . $this->debut->format('d.m.y') . '</strong> de '. $this->debut->format('H:i') .' à '. $this->fin->format('H:i');
            }
        } else {
            if ($this->debut->format('H:i') == '00:00' && $this->fin->format('H:i') == '00:00')
            {
                return 'Du '. $this->debut->format('D') . '. <strong>'. $this->debut->format('d.m.y'). '</strong> au '.$this->fin->format('D') . '. <strong>'. $this->fin->format('d.m.y'). '</strong>';
            } else {

                if ($this->debut->format('H:i') !== '00:00') 
                    {
                        $heure_debut = ' à '.$this->debut->format('H:i');
                    } else {
                        $heure_debut = '';
                    }

                if ($this->fin->format('H:i') !== '00:00') 
                    {
                        $heure_fin = ' à '.$this->fin->format('H:i');
                    } else {
                        $heure_fin = '';
                    }

                return 'Du '. $this->debut->format('D') . '. <strong>'. $this->debut->format('d.m.y'). '</strong>'. $heure_debut . '<br/>au '.$this->fin->format('D') . '. <strong>'. $this->fin->format('d.m.y'). '</strong>' . $heure_fin;
            }
        }
    }



    public function getDateDuAttribute()
    {
        return $this->debut->format('d.m.Y');
    }


    public function getDateAuAttribute()
    {
        return $this->debut->format('d.m.Y');
    }

    
}
