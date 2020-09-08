<?php namespace Digart\spectacles\Models;

use Model;

/**
 * Model
 */
class Categorie extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_spectacles_cat';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'designation' => 'required',
        'slug' => ['required', 'regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i', 'unique:digart_spectacles_cat'],
    ];


    public function getCulturoscopeCategoriesAttribute()
    {
        $url = 'https://www.culturoscope.ch/api/2.0/events_categories.php?api_key=CS-AFQWpUBJSw';
        
        $JSON = @file_get_contents($url);

        $data = json_decode($JSON, true);

        if ($JSON === false)
        {
            // Pas de connexion au serveur du Cultursocope ; on affiche alors des valeurs par défaut.
            return array(
                'AN' => 'Animation',
                'CI' => 'Cirque',
                'DA' => 'Danse',
                'EX' => 'Exposition',
                'LI' => 'Littérature',
                'MU' => 'Musique',
                'TH' => 'Théâtre',
                'PR' => 'Projection',
                );

        } else {
            
            $data = json_decode($JSON, true);

            $categorie = [];

            foreach($data as $item) {
                $categorie[$item['event_category_code']] = $item['event_category_title'];
            }

            return $categorie;
        }
       
    }   

    public function getCltpCatIdOptions()
    {
        return $this->culturoscope_categories;
    }
}
