<?php namespace Digart\spectacles\Models;

use Model;

/**
 * Model
 */
class Souvenir extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_spectacles_souvenirs';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


    public $attachMany = [
        'photos' => ['System\Models\File', 'public' => true],

    ];

    public $attachOne = [
        'photo_principale' => ['System\Models\File', 'public' => true]
    ];


    public $belongsTo = [
        'representation' => ['DigArt\Spectacles\Models\Representation',
                   'key' => 'representation_id',
                   'order' => 'debut'],                 
                     
    ];    

}
