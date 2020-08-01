<?php namespace Digart\spectacles\Models;

use Model;

/**
 * Model
 */
class Web extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    protected $appends = [''];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_spectacles_web';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /*
    public $belongsTo = [
         'page' => ['DigArt\Spectacles\Models\WebPage'  ,
                   'key' => 'page_id'],
    ];
    */

    public function getWebsAttribute() {
        return 'hello';
    }

    public function scopeFindWebContent($query, $page) 
    {
        return $query->where('page', $page);
    }
}
