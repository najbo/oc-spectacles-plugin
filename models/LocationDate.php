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
            return ucfirst($this->debut->format('D')). '. <strong>' . $this->debut->format('d.m.y') . '</strong> de '. $this->debut->format('H:i') .' à '. $this->fin->format('H:i');
        } else {
            return 'Du '. $this->debut->format('D') . '. <strong>'. $this->debut->format('d.m.y'). '</strong> à '. $this->debut->format('H:i') . '<br/>au '.$this->fin->format('D') . '. <strong>'. $this->fin->format('d.m.y'). '</strong> à '. $this->fin->format('H:i');
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
