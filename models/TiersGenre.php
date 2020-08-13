<?php namespace Digart\spectacles\Models;

use Model;

/**
 * Model
 */
class TiersGenre extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_spectacles_tgenres';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'designation' => 'required',
    ];


    public function scopeIsActif($query)
    {
        return $query->where('is_actif', true);
    }


    // Affich les genres pour les adresses des privés (appelé faussement tiers)
    public function scopeIsTiers($query)
    {
        return $query->where('is_tiers', true);
    }


    public function scopeIsSocietes($query)
    {
        return $query->where('is_societe', true);
    }    
}
