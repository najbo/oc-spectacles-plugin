<?php namespace Digart\spectacles\Models;

use Model;
use BackendAuth;

/**
 * Model
 */
class Representation extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at','debut', 'fin'];

    #protected $jsonable = ['souvenirs'];

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


    public function getDebutTexteAttribute() {
        return $this->debut->format('d.m.y H:i');
    }

    // Permet de trier les spectacles par les représentations actives. Utilisé sur programme.htm
    public function scopeIsActive($query) {


        #return $query->where('debut','>=', now())->orderBy('debut');
        
        $user = BackendAuth::getUser();

        if ($user && $user->hasAccess('digart.spectacles.spectacles.preview')) {
            return $query->
                whereHas('statut', function ($query) {
                        $query->where('is_frontend','1')->orWhere('is_brouillon', 1);})
                ->where('debut','>=', now())->orderBy('debut');
        } else {

            return $query->
                whereHas('statut', function ($query) {
                        $query->where('is_frontend','1');})
                ->where('debut','>=', now())->orderBy('debut');
        }
    
    }    
}
