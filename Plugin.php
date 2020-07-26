<?php namespace Digart\spectacles;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
        'Digart\Spectacles\Components\Programme' => 'listeProgramme',
        'Digart\Spectacles\Components\Spectacle' => 'detailProgramme',
        'Digart\Spectacles\Components\Saisons' => 'saisons',
        'Digart\Spectacles\Components\Saison' => 'detailSaison'

    ];
    }

    public function registerSettings()
    {
    }
}
