<?php namespace Digart\spectacles\Models;

use Model;
use BackendAuth;

/**
 * Model
 */
class Protocole extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at', 'date'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_spectacles_prot';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'date' => 'required'
    ];

    public $attachOne = [
        'image' => ['System\Models\File', 'public' => false],
    ];

    public $attachMany = [
        'documents' => ['System\Models\File', 'public' => false],
        'images' => ['System\Models\File', 'public' => false],
    ];




    public $belongsTo = [
        'administrateur' => ['\Backend\Models\User',
                   'key' => 'admin_id'],
        'statut' => ['DigArt\Spectacles\Models\ProtocoleStatut',
                   'key' => 'pstatut_id',
                   'order' => 'sort_order'],
        'genre' => ['DigArt\Spectacles\Models\ProtocoleGenre',
                   'key' => 'pgenre_id',
                   'order' => 'sort_order'],                   
    ];


    // Permet de mettre l'attribut admin_id par défaut à la valeur de l'administrateur connecté
    public function __construct(array $attributes = array()) {
        if (BackendAuth::check()) {
            $this->setRawAttributes(['admin_id' => BackendAuth::getUser()->id], true);
            parent::__construct($attributes);
        }
    }


}
