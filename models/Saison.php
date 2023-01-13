<?php namespace Digart\spectacles\Models;

use Model;
use Carbon\Carbon;
use Log;

/**
 * Model
 */
class Saison extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_spectacles_saisons';


    protected $dates = ['deleted_at','debut', 'fin'];

    protected $appends = ['is_saison_actuelle'];


    /**
     * @var array Validation rules
     */
    public $rules = [
        'designation' => 'required',
        'debut' => 'required',
        'fin' => 'required',
        'slug' => ['required', 'regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i', 'unique:digart_spectacles_genres'],
    ];



    public $attachMany = [
        'programmes' => ['System\Models\File', 'public' => true],
    ];


    public $belongsTo = [
        'statut' => ['DigArt\Spectacles\Models\Statut',
                   'key' => 'statut_id',
                   'order' => 'sort_order'],               
    ];

    public $hasMany = [
         'spectacles' => ['DigArt\Spectacles\Models\Spectacle', 
            'key' => 'saison_id', 
            'softDelete' => false]
    ];      

    public function scopeSorted($query) {
        return $query->orderBy('debut', 'desc');
    }

    public function getIsSaisonActuelleAttribute() {

        $today = Carbon::today()->toDateString();
        
        $debut = $this->attributes['debut'];
        $fin = $this->attributes['fin'];

        if ($today >= $debut && $today <= $fin) {
            return true;
        }
    }

    public function getSaisonOptions()
    {
        Log::info('hello');
        return Saison::orderBy('debut', 'desc')->lists('designation', 'id');
    }    


}
