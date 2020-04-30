<?php namespace Digart\spectacles\Models;

use Model;

/**
 * Model
 */
class Spectacle extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    protected $jsonable = ['parties'];

    public $attachMany = [
        'images' => ['System\Models\File', 'public' => false],
        'technique_images' => ['System\Models\File', 'public' => false],
        'documents' => ['System\Models\File', 'public' => false],
        'technique_documents' => ['System\Models\File', 'public' => false],
    ];

    public $attachOne = [
        'affiche' => ['System\Models\File', 'public' => false]
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_spectacles_spect';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'titre_principal' => 'required'
    ];

    /**
     *  Relations
     */
    public $belongsTo = [
        'saison' => ['DigArt\Spectacles\Models\Saison',
                   'key' => 'saison_id',
                   'order' => 'debut'],               
        'institution' => ['DigArt\Spectacles\Models\Institution',
                   'key' => 'institution_id',
                   'order' => 'sort_order'],       
        'statut' => ['DigArt\Spectacles\Models\Statut',
                   'key' => 'statut_id',
                   'order' => 'sort_order'],                          
        'artiste' => ['DigArt\Spectacles\Models\Artiste'],                     
    ];

    public $belongsToMany = [
        'genres' => [
            'DigArt\Spectacles\Models\Genre',
            'table' => 'digart_spectacles_spect_genr',
            'key' => 'spectacle_id',
            'otherKey' => 'genre_id',
            'order' => 'designation'],
        'categories' => [
            'DigArt\Spectacles\Models\Categorie',
            'table' => 'digart_spectacles_spect_cat',
            'key' => 'spectacle_id',
            'otherKey' => 'categorie_id',
            'order' => 'designation'],            
        'artistes' => [
            'DigArt\Spectacles\Models\Artiste',
            'table' => 'digart_spectacles_spect_art',
            'key' => 'spectacle_id',
            'otherKey' => 'artiste_id'],            
    ];    


    public $hasMany = [
         'representations' => ['DigArt\Spectacles\Models\Representation', 
            'key' => 'spectacle_id', 
            'order' => 'debut',
            'softDelete' => true],
    ];     

}


