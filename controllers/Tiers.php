<?php namespace Digart\spectacles\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Tiers extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'digart.spectacles.tiers' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Digart.spectacles', 'gestion', 'tiers');
    }

    public function listExtendQuery($query)
    {
       
        #$query->with('latestdate')->get()->sortBy('latestdate.debut');
        $query->orderBy('nom')->orderBy('prenom');

    }        
}
