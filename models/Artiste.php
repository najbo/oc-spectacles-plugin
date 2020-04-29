<?php namespace Digart\spectacles\Models;

use Model;

/**
 * Model
 */
class Artiste extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_spectacles_artistes';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'agent' => ['DigArt\Spectacles\Models\Agent',
                   'key' => 'agent_id',
                   'order' => 'designation'],                                  
    ];    
}
