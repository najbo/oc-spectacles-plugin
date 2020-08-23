<?php namespace Digart\spectacles\Models;

use Model;
use Log;

/**
 * Model
 */
class Fonction extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_spectacles_fonctions';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'designation' => 'required',
    ];


    // Filtre de la fonction en fonction de la destionation, où :
    // 0 = spectacles & représentations
    // 1 = spectacles
    // 2 = représentations

    public function scopeSpectaclesRepresentations($query) 
    {
        return $query->where('destination', 0);
    }

    public function scopeSpectacles($query) 
    {
        return $query->where('destination', 0)->orWhere('destination', 1);
    }    

    public function scopeRepresentations($query, $model) 
    {
        $valeur = $model->planifiable_type;

        Log::info('Route : '.$valeur);
        return $query->where('destination', 0)->orWhere('destination', 2);
    }   

    public function scopeSelonModele($query, $model) 
    {

        if ($model->planifiable_type == Spectacle::class)
        {
            # Log::info('Route : '.$model->planifiable_type);
            return $query->where('destination', 0)->orWhere('destination', 1);
        }

        if ($model->planifiable_type == Representation::class)
        {
            # Log::info('Route : '.$model->planifiable_type);
            return $query->where('destination', 0)->orWhere('destination', 2);
        }
    }        
}
