<?php namespace Digart\spectacles\Models;

use Model;
use Carbon\Carbon;

/**
 * Model
 */
class AbonnementGroupe extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at', 'debut', 'fin'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_spectacles_abogrp';

    protected $appends = ['nbre_abos'];
    /**
     * @var array Validation rules
     */
    public $rules = [
        'titre' => 'required',
    ];

    public $hasMany = [
         'abonnements' => ['DigArt\Spectacles\Models\Abonnement', 
            'order' => 'sort_order',
            'softDelete' => true],          
    ];     


    public $belongsTo = [
        'institution' => ['DigArt\Spectacles\Models\Institution',
                   'order' => 'sort_order'],
    ]; 

    
    public function getNbreAbosAttribute()
    {
        return $this->abonnements->count();
    }
    public function scopeIsActif($query) 
    {
        return $query->where('is_actif', 1)->whereDate('debut', '<=', Carbon::today()->toDateString());
    }

    public function scopeIsActifAbos($query)
    {
        
        return $query->
                with(['abonnements' => function ($query) {
                        $query->isActif();
                    }]);
    }
}
