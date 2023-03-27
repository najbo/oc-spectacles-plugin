<?php namespace Digart\spectacles\Models;

use Model;
use BackendAuth;

/**
 * Model
 */
class Planification extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at', 'debut', 'fin', 'confirme_le', 'annule_le'];

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
        'auteur' => ['\Backend\Models\User'],
        'benevole' => ['\Rainlab\User\Models\User', 'order' => 'name'],
        'fonction' => ['\Digart\Spectacles\Models\Fonction'],
        'representation' => ['\Digart\Spectacles\Models\Representation'],
    ];

    public $morphTo = [
        'planifiable' => []
    ];

    // Inscrit le backend user connecté dans le champ programmateur
    public function getAdministrateurActuelAttribute()
    {
        if (BackendAuth::check()) {
            return BackendAuth::getUser()->id;
        }
    }

    public function scopeWhatModel($query, $model)
    {
        return $query->where('planifiable_type', $model);
    }

    public function scopeBenevole($query, $benevoleId)
    {
        return $query->where('benevole_id', $benevoleId);
    }

    public function scopeNextRepresentations($query)
    {
        return $query->whereHas('planifiable', function ($query) {
                $query->where('debut', '>=', now());
        });
    }
}
