<?php namespace Digart\spectacles\Models;

use Model;

/**
 * Model
 */
class Statut extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_spectacles_statuts';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


    // Filtre la liste déroulante sur spectacles pour n'afficher que les statuts pour les spectacles (is_spectacle) :
    
    public function scopeSpectacle($query) {

        return $query->where('is_spectacle',1);

    }


    // Filtre la liste déroulante sur saisons pour n'afficher que les statuts pour les saisons (is_saison) :

    public function scopeSaison($query) {

        return $query->where('is_saison',1);
        
    }    
}
