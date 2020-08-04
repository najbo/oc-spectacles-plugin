<?php namespace Digart\spectacles\Models;

use Model;
use Carbon\Carbon;

/**
 * Model
 */
class Abonnement extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at', 'debut', 'fin'];

    protected $appends = ['clean_titre', 'clean_prix'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_spectacles_abo';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'titre' => 'required',
    ];


    // Cette fonction retire les tags HTML du titre
    public function getCleanTitreAttribute()
    {
        return strip_tags($this->titre);
    }

    // Cette fonction retire les tags HTML du titre
    public function getCleanPrixAttribute()
    {
        return strip_tags($this->prix);
    }

    public function scopeIsActif($query) 
    {
        return $query->where('is_actif', 1)->whereDate('debut', '<=', Carbon::today()->toDateString());
    }
}
