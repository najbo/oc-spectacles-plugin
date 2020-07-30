<?php namespace Digart\spectacles\Models;

use Model;
use BackendAuth;
use Carbon\Carbon;

/**
 * Model
 */
class Publication extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at', 'debut', 'fin'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_spectacles_blog';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'debut' => 'required',
        'designation' => 'required',
        'slug' => ['required', 'regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i', 'unique:digart_spectacles_blog'],
    ];

    protected $slugs = ['slug' => 'designation'];


    public $attachOne = [
        'image' => ['System\Models\File', 'public' => true]
    ];

    public $attachMany = [
        'images' => ['System\Models\File', 'public' => true],
        'documents' => ['System\Models\File', 'public' => true],
    ];



    public $belongsTo = [
        'administrateur' => ['\Backend\Models\User',
                   'key' => 'admin_id'],
        'etendue' => ['DigArt\Spectacles\Models\PublicationEtendue',
                   'key' => 'etendue_id',
                   'order' => 'sort_order'],                                  
    ];  

    // Permet de mettre l'attribut admin_id par défaut à la valeur de l'administrateur connecté
/*    public function __construct(array $attributes = array()) {
        if (BackendAuth::check()) {
            $this->setRawAttributes(['admin_id' => BackendAuth::getUser()->id], true);
            parent::__construct($attributes);
        }
    } */  



    public function scopeIsActif($query) {
        return $query->where('is_actif', 1)->whereDate('debut', '<=', Carbon::today()->toDateString());

    }


    public function scopeOrderByDate($query) {
        return $query->latest('debut');
    }


    public function scopeLatestCommunication($query) {
        
        # return $query->isActif()->whereDate('fin', '>=', Carbon::today()->toDateString())->isCommunication()->orderByDate();
        return $query->isActif()->isCommunication()->orderByDate();
    }


    public function scopeLatestBlog($query) {
        
        # return $query->isActif()->whereDate('fin', '>=', Carbon::today()->toDateString())->isCommunication()->orderByDate();
        return $query->isActif()->isBlog()->orderByDate();
    }


    public function scopeIsBlog($query) {
        return $query->whereHas('etendue', function ($query) {
                    $query->where('is_blog',1);
                });
    } 

    public function scopeIsCommunication($query) {
        return $query->whereHas('etendue', function ($query) {
                    $query->where('is_communication',1);
                });
    } 

    public function scopeIsIntranet($query) {
        return $query->whereHas('etendue', function ($query) {
                    $query->where('is_intranet',1);
                });
    } 
}
