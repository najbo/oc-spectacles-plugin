<?php

namespace Digart\Spectacles\Components\Intranet;

use Auth;
use Carbon\Carbon;
use Cms\Classes\ComponentBase;
use Digart\spectacles\Models\Planification;
use Digart\spectacles\Models\Representation;
use Digart\spectacles\Models\Spectacle;
use Log;

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
        $users = $this->page['user'] = Auth::getUser();
        // $this->page['planif_representations'] = Planification::where('planifiable_type', Representation::class)->where('benevole_id', $user->id)->get()->sortBy('planifiable.debut');
    }

    public function representations()
    {
        $user = $this->page->user;

        $planifications = Planification::whatModel(Representation::class)->benevole($user->id)
            ->nextRepresentations()
        ->get()->sortBy('planifiable.debut');

        return $planifications;

        $planifications = Planification::where('planifiable_type', Representation::class)->where('benevole_id', $user->id)
            ->get()->sortBy('planifiable.debut');
    }
}
