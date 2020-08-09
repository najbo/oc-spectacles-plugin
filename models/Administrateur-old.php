<?php namespace Digart\spectacles\Models;

use Model;
use \Backend\Models\User;

/**
 * Model
 */
class AdministrateurOld extends User
{

    protected $appends = ['full_name'];


    public function getFullNameAttribute() {
        return trim($this->first_name. ' ' . $this->last_name);
    }
}
