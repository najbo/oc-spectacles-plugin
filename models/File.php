<?php namespace Digart\spectacles\Models;

use Model;
use BackendAuth;

/**
 * Model
 */
class File extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    public $attachOne = [
        'document' => ['System\Models\File', 'public' => false]
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_spectacles_files';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'document' => 'required',
    ];

    
    public $belongsTo = [
        'auteur' => ['\Backend\Models\User',
            'order' => 'last_name'],

    ];

    // Inscrit le backend user connecté dans le champ programmateur
    public function getAdministrateurActuelAttribute()
    {
        if (BackendAuth::check()) {
           return BackendAuth::getUser()->id;
        }
    }
}
