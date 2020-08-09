<?php namespace Digart\spectacles\Controllers;

use Backend\Classes\Controller;
use BackendMenu;


class Locations extends Controller
{
    public $implement = [       'Backend\Behaviors\ListController',
                                'Backend\Behaviors\FormController',
                                'Backend.Behaviors.RelationController',    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $relationConfig = 'config_relation.yaml';

    public $requiredPermissions = [
        'digart.spectacles.locations' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Digart.spectacles', 'gestion', 'locations');
    }

    public function listExtendQuery($query)
    {
       
        # return $query->with('latestdate')->get()->sortBy('latestdate.debut');


        // ne filtre que les actif
        # return $query->isFrontend();
        # $query->latestCommunication();
        #$query->latestBlog()->take(3)->get();
    }    
}
