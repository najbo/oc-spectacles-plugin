<?php namespace Digart\spectacles\Models;

use Model;

/**
 * Model
 */
class Genre extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'designation'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_spectacles_genres';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'designation' => 'required',
        'slug' => ['required', 'regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i', 'unique:digart_spectacles_genres'],
    ];
}
