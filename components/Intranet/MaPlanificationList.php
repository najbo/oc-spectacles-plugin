<?php namespace Digart\Spectacles\Components\Intranet;

use Digart\Spectacles\Models\Planification;

use Auth;
use Log;
use Carbon\Carbon;
use Cms\Classes\ComponentBase;


class MaPlanificationList extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Ma planification (intranet)',
            'description' => 'Affiche la liste de la planification d\'un utilisateur connecté à l\'intranet.'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
        {
            $this->prepareVars();
        }  
        
    protected function prepareVars()
    {

        $user = $this->page['user'] = Auth::getUser();
        $this->page['planif_representations'] = Planification::where('planifiable_type', Representation::class)->where('benevole_id',  $user->id)->get()->sortBy('planifiable.debut');

    } 

}
