<?php namespace Digart\spectacles\Models;

use Model;

/**
 * Model
 */
class Location extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    protected $appends = ['locationsDate.test'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_spectacles_loc';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'auteur' => ['\Backend\Models\User'],                   
    ];

    public $hasMany = [
         'locationsDate' => ['DigArt\Spectacles\Models\LocationDate', 
            'order' => 'debut',
            'softDelete' => true],            
    ]; 



    // Permet de trier par les dates réservations des locations (enfants)
    public $hasOne = [
         'latestdate' => ['DigArt\Spectacles\Models\LocationDate', 
            'order' => 'debut'],
    ];




    public function scopeIsActif($query)
    {
        return $query->where('is_actif', 1);
    }



    // Renvoie le nombre de réservations sur la liste des locations
    public function getNbreDatesAttribute()
    {
        return $this->locationsDate->count();
    }   


    // Renvoie la période des réservations sur la liste des locations
    public function getPeriodesAttribute() 
    {

        if ($this->locationsDate->count() > 1 )
        {
            $objet = $this->locationsDate->pluck('date_du')->first() . ' / '. $this->locationsDate->pluck('date_au')->last();
            
        } elseif ($this->locationsDate->count() == 1)
        {
            $objet = $this->locationsDate->pluck('date_du')->first();
        } else 
        {
            $objet = ''; 
        }
    
        return $objet;
    }


    public function afterUpdate()
        {

        $debut = $this->locationsDate->sortBy('debut')->first()->debut;
        $fin = $this->locationsDate->sortBy('fin')->last()->fin;
        \Log::info("$debut. ' / '. Mise à jour de la réservation ".$this->id. ' - ' .$this->designation .' par ' .$this->auteur->first_name); 
        
    }
}
