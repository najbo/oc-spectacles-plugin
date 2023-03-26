<?php namespace Digart\spectacles\Models;

use Model;

/**
 * Model
 */
class ProfileUser extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_spectacles_profiles_users';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'user' => ['RainLab\User\Models\User'],
    ];

    // Fonction statique qui permet de créer un modèle Profile après l'accès à un utilisation FE :

    public static function getFromUser($user) {

        if ($user->profile)
            return $user->profile;

        $profile = new static;
        $profile->user = $user;
        $profile->save();

        $user->profile = $profile;  

        return $profile;
    }
}
