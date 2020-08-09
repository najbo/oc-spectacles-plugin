<?php namespace Digart\spectacles\Models;

use Model;

/**
 * Model
 */
class Team extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    protected $jsonable = ['membres'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_spectacles_team';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'titre' => 'required',
    ];


    public $attachOne = [
        'portrait' => ['System\Models\File', 'public' => true],
    ];


    public $belongsTo = [
        'institution' => ['DigArt\Spectacles\Models\Institution',
                   'order' => 'sort_order'],
    ]; 


    public function scopeIsActif($query) 
    {
        return $query->where('is_actif',1);
    }


    public function getTypeIdOptions() {
        return array(
            1 => 'Détaillé (tuiles)',
            2 => 'En tableau',
            3 => 'Simple (que le nom du membre)'
        );
    }    
}
