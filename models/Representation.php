<?php

namespace Digart\spectacles\Models;

use BackendAuth;
use Digart\spectacles\Models\Planification;
use Log;
use Model;

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


    public $hasMany = [
        'planification_old' => Planification::class
    ];


    public $morphMany = [
        'planifications' => [Planification::class,
            'name' => 'planifiable']
    ];

    public function getDebutTexteAttribute()
    {
        return $this->debut->format('d.m.y H:i');
    }

    public function getIsDatePasseeAttribute()
    {
        if ($this->debut <= now()) {
            return true;
        } else {
            return false;
        }
    }


    public function getTitrePrincipalAttribute()
    {
        return $this->spectacle->titre_principal;
    }


    public function getTitreSecondaireAttribute()
    {
        return $this->spectacle->titre_secondaire;
    }


    // Retourne la date et l'heure par défaut pour les nouvelles représentations
    public function getDateHeureDefautAttribute()
    {

        if (Institution::first()) {
            return Institution::first()->default_time;
        }
    }

    public function scopeIsProchainement($query)
    {
        return $query->where('debut', '>=', now());
    }


    public function scopeIsStatutRepresentationCulturoscope($query)
    {
        return $query->
                whereHas('statut', function ($query) {
                    $query->where('is_date_cltp', 1);
                });
    }


    // Permet de trier les spectacles par les représentations actives. Utilisé sur programme.htm et composant Program.php

    public function scopeIsActive($query)
    {
        $user = BackendAuth::getUser();

        if ($user && $user->hasAccess('digart.spectacles.spectacles.preview')) {
            return $query->
                whereHas('statut', function ($query) {
                        $query->where('is_frontend', '1')->orWhere('is_brouillon', 1);
                })
                ->where('debut', '>=', now())->orderBy('debut');
        } else {
            return $query->
                whereHas('statut', function ($query) {
                        $query->where('is_frontend', '1');
                })
                ->where('debut', '>=', now())->orderBy('debut');
        }
    }

    public function scopeIsToutes($query)
    {
        #return $query->where('debut','>=', now())->orderBy('debut');
        
        $user = BackendAuth::getUser();

        if ($user && $user->hasAccess('digart.spectacles.spectacles.preview')) {
            return $query->
                whereHas('statut', function ($query) {
                        $query->where('is_frontend','1')->orWhere('is_brouillon', 1);})
                ->orderBy('debut');
        } else {

            return $query->
                whereHas('statut', function ($query) {
                        $query->where('is_frontend','1');})
                ->orderBy('debut');
        }
    
    }       


}
