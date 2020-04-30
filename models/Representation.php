<?php namespace Digart\spectacles\Models;

use Model;

/**
 * Model
 */
class Representation extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at','debut'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_spectacles_repres';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'debut' => 'required'
    ];

    public $belongsTo = [
        'lieu' => ['DigArt\Spectacles\Models\Lieu',
                   'key' => 'lieu_id',
                   'order' => 'sort_order'],                 
        'statut' => ['DigArt\Spectacles\Models\Statut',
                   'key' => 'statut_id',
                   'order' => 'sort_order'],  
        'spectacle' => ['DigArt\Spectacles\Models\Spectacle',
                   'key' => 'spectacle_id'],                      
    ];    
}
