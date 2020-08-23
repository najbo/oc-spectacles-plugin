<?php namespace Digart\spectacles\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class RepresentationsPlanifications extends Controller
{
    public $implement = [       'Backend\Behaviors\ListController',
                                'Backend\Behaviors\FormController',  
                                'Backend.Behaviors.RelationController',
                                ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $relationConfig = 'config_relation.yaml';

    public $requiredPermissions = [
        'digart.spectacles.planification' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Digart.spectacles', 'gestion', 'planning-representations');
    }

    public function listExtendQuery($query)
    {
       
        $query->where('is_planning_backend', 1);

    }     
}
