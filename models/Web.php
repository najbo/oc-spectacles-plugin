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

    protected $jsonable = ['timeline', 'sponsors', 'materiel'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_spectacles_web';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachMany = [
        'location_images' => ['System\Models\File', 'public' => true],
        'location_documents' => ['System\Models\File', 'public' => true],

        'historique_images' => ['System\Models\File', 'public' => true],
        'historique_documents' => ['System\Models\File', 'public' => true],

        'presentation_images' => ['System\Models\File', 'public' => true],
    ];

    public $attachOne = [
        'location_image' => ['System\Models\File', 'public' => true],
        'historique_image' => ['System\Models\File', 'public' => true],

        'presentation_image' => ['System\Models\File', 'public' => true],
        'presentation_box1_image' => ['System\Models\File', 'public' => true]

    ];


    /*
    public $belongsTo = [
         'page' => ['DigArt\Spectacles\Models\WebPage'  ,
                   'key' => 'page_id'],
    ];
    */


    public function scopeFindWebContent($query, $page) 
    {
        return $query->where('page', $page);
    }

    public function getWebsAttribute() {
        return 'hello';
    }

    public function getIconeOptions($value, $formData) 
    {
        return [
            '' => 'Aucune icône',
            '1' => 'Naissance',
            '3' => 'Coeur',
            '4' => 'Construction',
        ];

    }    


}
