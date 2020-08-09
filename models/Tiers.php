<?php namespace Digart\spectacles\Models;

use Model;

/**
 * Model
 */
class Tiers extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    protected $appends = ['tiers_name', 'full_name'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_spectacles_tiers';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


    public $belongsTo = [
        'societe' => ['DigArt\Spectacles\Models\Societe'],
    ];


    public $belongsToMany = [
        'genres' => [
            'DigArt\Spectacles\Models\TiersGenre',
            'table' => 'digart_spectacles_tiers_genres',
            'key' => 'tiers_id',
            'otherKey' => 'genre_id',
            'order' => 'sort_order'],  
    ]; 


    public function getFullNameAttribute() 
    {

        return $this->prenom .' ' . $this->nom;
    }



    public function getTiersNameAttribute() 
    {

        if ($this->type_id == 1)
        {
            return $this->prenom .' ' . $this->nom;
        } else {
            return $this->raison_sociale;
        }
    }

    public function getTypeIdOptions($value, $data)
    {
        return array(
            1 => 'Privé',
            2 => 'Entreprise'
        );
    }

    public function scopePhotographes($query)
    {

        return $query;

        return $query->
            whereHas('genres', function($q){
                $q->where('tiers_id', '=', 'xxxx');
            })->get();


    }
}
