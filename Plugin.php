<?php namespace Digart\spectacles;

use Digart\spectacles\Models\Fonction;
use Digart\spectacles\Models\ProfileUser;
use System\Classes\PluginBase;
use Rainlab\User\Models\User as UserModel;
use Rainlab\User\Controllers\Users as UsersController;
use Log;


class Plugin extends PluginBase
{

    # public $require = ['rainlabl.user'];

    public function registerComponents()
    {
        return [
        'Digart\Spectacles\Components\Programme' => 'listeProgramme',
        'Digart\Spectacles\Components\Spectacle' => 'detailProgramme',
        'Digart\Spectacles\Components\Saisons' => 'saisons',
        'Digart\Spectacles\Components\Saison' => 'detailSaison',
        'Digart\Spectacles\Components\PublicationsRecherche' => 'rechercheDetail'
        # 'Digart\Spectacles\Components\Intranet\MaPlanificationList' => 'maPlanificationList'
        ];
    }

    public function registerSettings()
    {

    }

    public function boot()
    {

        // Extension du plugin User (Front end) pour ajouter des champs :


        UserModel::extend(function ($model) {
            $model->belongsToMany['fonctions'] = 
                [Fonction::class,
                    'table' => 'digart_spectacles_user_fct',
                    'key' => 'user_id', 
                    'otherKey' => 'fonction_id'
                ];
            $model->hasOne['profile'] =
                [ProfileUser::class,
                    'table' => 'digart_spectacles_profiles_users',
                    'default' => true
                ];
            });

    
        UsersController::extendFormFields(function($form, $model, $context){

            if (!$model instanceof UserModel) {
                return;
            }

            if (!$model->exists)            
                return;

            // log::info($model);
            // ProfileUser::getFromUser($model);

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
                'profile[mobile]' => [
                    'label' => 'Téléphone mobile',
                    'tab' => 'Profiles',
                    'type' => 'text'
                ],
            ]);


        });





    }
}
