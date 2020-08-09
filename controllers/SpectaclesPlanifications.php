<?php namespace Digart\spectacles\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class SpectaclesPlanifications extends Controller
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
        BackendMenu::setContext('Digart.spectacles', 'gestion', 'planning');

        $this->planificationFormWidget = $this->createRepresentationPlanificationFormWidget();
    }



    protected $planificationFormWidget;

    public function onLoadCreatePlanificationForm()
    {
        $this->vars['planificationFormWidget'] = $this->planificationFormWidget;

        $this->vars['representationId'] = post('manage_id');

        # \Log::info('INFO : '.post('manage_id'));

        return $this->makePartial('planification_create_form');
    }

    protected function getRepresentationModel()
    {
        $manageId = post('manage_id');

        $representation = $manageId
            ? \Digart\Spectacles\Models\Representation::find($manageId)
            : new \Digart\Spectacles\Models\Representation;

        return $representation;
    }

    protected function createRepresentationPlanificationFormWidget()
    {
        $config = $this->makeConfig('$/digart/spectacles/models/planification/fields.yaml');

        $config->alias = 'planificationForm';

        $config->arrayName = 'Planification';

        $config->model = new \Digart\Spectacles\Models\Planification;

        $widget = $this->makeWidget('Backend\Widgets\Form', $config);

        $widget->bindToController();

         # \Log::info('INFO : '.$this->getRepresentationModel());

        return $widget;
    }    


public function onCreatePlanification()
    {
        $data = $this->planificationFormWidget->getSaveData();

        $model = new \Digart\Spectacles\Models\Planification;

        $model->fill($data);

        $model->save();

        $representation = $this->getRepresentationModel();


        $representation->planifications()->add($model, $this->planificationFormWidget->getSessionKey());

        return $this->refreshRepresentationPlanificationList();
    }

    public function onDeletePlanification()
    {
        $recordId = post('record_id');

        $model = \Digart\Spectacles\Models\Planification::find($recordId);

        $representation = $this->getRepresentationModel();

        $representation->planifications()->remove($model, $this->planificationFormWidget->getSessionKey());

        return $this->refreshRepresentationPlanificationList();
    }

    protected function refreshRepresentationPlanificationList()
    {
        $planifications = $this->getRepresentationModel()
            ->planifications()
            ->withDeferred($this->planificationFormWidget->getSessionKey())
            ->get()
        ;

        $this->vars['planifications'] = $planifications;

        return ['#planificationList' => $this->makePartial('planification_list')];
    }


}
