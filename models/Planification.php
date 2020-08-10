<?php namespace Digart\spectacles\Models;

use Model;

/**
 * Model
 */
class Planification extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at', 'debut', 'fin'];

    protected $guarded = [];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_spectacles_planification';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


    public $belongsTo = [
        'benevole' => ['\Rainlab\User\Models\User'],
        'fonction' => ['\Digart\Spectacles\Models\Fonction'],
        'representation' => ['\Digart\Spectacles\Models\Representation'],
    ];
}
