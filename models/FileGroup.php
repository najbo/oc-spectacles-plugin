<?php namespace Digart\spectacles\Models;

use Model;

/**
 * Model
 */
class FileGroup extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    # protected $jsonable = ['documents'];



    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_spectacles_filesgrps';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


    public $belongsTo = [
        'auteur' => ['\Backend\Models\User',
        'order' => 'name'],

    ];

    public $belongsToMany = [      
        'fonctions' => [
            'DigArt\Spectacles\Models\Fonction',
            'table' => 'digart_spectacles_filesgrps_fct',
            'key' => 'filegroup_id',
            'otherKey' => 'fonction_id'],            
    ];


    public $hasMany = [
         'files' => ['DigArt\Spectacles\Models\File', 
            'key' => 'filegroup_id', 
            'order' => 'sort_order',
            'softDelete' => true],           
    ];     


}
