<?php namespace Digart\spectacles;

use System\Classes\PluginBase;
use Rainlab\User\Models\User as UserModel;
use Rainlab\User\Controllers\Users as UsersController;


class Plugin extends PluginBase
{

public $require = ['rainlabl.user'];

    public function registerComponents()
    {
        return [
        'Digart\Spectacles\Components\Programme' => 'listeProgramme',
        'Digart\Spectacles\Components\Spectacle' => 'detailProgramme',
        'Digart\Spectacles\Components\Saisons' => 'saisons',
        'Digart\Spectacles\Components\Saison' => 'detailSaison',
        'Digart\Spectacles\Components\PublicationsRecherche' => 'rechercheDetail'

        ];
    }

    public function registerSettings()
    {

    }

    public function boot()
    {

        UserModel::extend(function ($model) {
                $model->belongsToMany['fonctions'] = 
                    ['Digart\Spectacles\Models\Fonction',
                        'table' => 'digart_spectacles_user_fct',
                        'key' => 'user_id', 
                        'otherKey' => 'fonction_id'
                        ];
                    });

    
        UsersController::extendFormFields(function($form, $model, $context){

            if (!$model instanceof UserModel) {
                return;
            }

            $form->addTabFields([
                'fonctions' => [
                    'label' => 'Fonctions',
                    'tab' => 'Profiles',
                    'span' => 'auto',
                    'mode' => 'relation',
                    'separator'=> 'comma',
                    'customTags'=> 'true',
                    'nameFrom'=> 'designation',
                    'type' => 'taglist',
                ],
            ]);


        });





    }
}
