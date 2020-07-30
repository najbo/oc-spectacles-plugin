<?php namespace Digart\spectacles\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Publications extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'digart.spectacles.blog' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Digart.spectacles', 'communication', 'actualites');
    }

    public function listExtendQuery($query)
    {
        # $query->isActif(); // ne filtre que les actif
        # $query->isFrontend();
        # $query->latestCommunication();
        #$query->latestBlog()->take(3)->get();
    }
}
