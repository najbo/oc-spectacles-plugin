<?php namespace Digart\spectacles\Updates;

use Seeder;
use DigArt\Spectacles\Models\Saison;

class Seeder1011 extends Seeder
{
    public function run()
    {

        Saison::truncate();

        Saison::create([
            'designation' => 'Saison 2021-2022',
            'debut' => '2021-09-01',
            'fin' => '2022-08-31',
            'slug' => '2021-2022',
            'statut_id' => 2,
            'developpement' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tempor leo eros, non iaculis lectus dignissim sollicitudin. Cras at nibh eu ipsum luctus bibendum. Cras elit tellus, vestibulum commodo nisi quis, tempus tristique nunc. Phasellus faucibus massa sit amet dui ultricies, eu volutpat arcu bibendum. Duis erat velit, eleifend in dolor vitae, sodales rhoncus nisl. Donec quis tortor non diam condimentum auctor. Nullam sed semper nunc. Aenean iaculis nulla ut erat faucibus volutpat. Sed tortor velit, mattis et tempor et, ultrices quis sapien. Vestibulum posuere imperdiet rutrum. Mauris ac viverra lacus. Donec nec nibh sit amet metus porta condimentum commodo in nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        ]);
        
        Saison::create([
            'designation' => 'Saison 2020-2021',
            'debut' => '2020-09-01',
            'fin' => '2021-08-31',
            'slug' => '2020-2021',
            'is_actuel' => true,
            'statut_id' => 1,
            'developpement' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tempor leo eros, non iaculis lectus dignissim sollicitudin. Cras at nibh eu ipsum luctus bibendum. Cras elit tellus, vestibulum commodo nisi quis, tempus tristique nunc. Phasellus faucibus massa sit amet dui ultricies, eu volutpat arcu bibendum. Duis erat velit, eleifend in dolor vitae, sodales rhoncus nisl. Donec quis tortor non diam condimentum auctor. Nullam sed semper nunc. Aenean iaculis nulla ut erat faucibus volutpat. Sed tortor velit, mattis et tempor et, ultrices quis sapien. Vestibulum posuere imperdiet rutrum. Mauris ac viverra lacus. Donec nec nibh sit amet metus porta condimentum commodo in nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        ]);

        Saison::create([
            'designation' => 'Saison 2019-2020',
            'debut' => '2019-09-01',
            'fin' => '2020-08-31',
            'slug' => '2019-2020',
            'is_actuel' => false,
            'statut_id' => 1,
            'developpement' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tempor leo eros, non iaculis lectus dignissim sollicitudin. Cras at nibh eu ipsum luctus bibendum. Cras elit tellus, vestibulum commodo nisi quis, tempus tristique nunc. Phasellus faucibus massa sit amet dui ultricies, eu volutpat arcu bibendum. Duis erat velit, eleifend in dolor vitae, sodales rhoncus nisl. Donec quis tortor non diam condimentum auctor. Nullam sed semper nunc. Aenean iaculis nulla ut erat faucibus volutpat. Sed tortor velit, mattis et tempor et, ultrices quis sapien. Vestibulum posuere imperdiet rutrum. Mauris ac viverra lacus. Donec nec nibh sit amet metus porta condimentum commodo in nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        ]);

        Saison::create([
            'designation' => 'Saison 2018-2019',
            'debut' => '2018-09-01',
            'fin' => '2019-08-31',
            'slug' => '2018-2019',
            'is_actuel' => false,
            'statut_id' => 1,
        ]);

        Saison::create([
            'designation' => 'Saison 2017-2018',
            'debut' => '2017-09-01',
            'fin' => '2018-08-31',
            'slug' => '2017-2018',
            'is_actuel' => false,
            'statut_id' => 1,
        ]);

        Saison::create([
            'designation' => 'Saison 2016-2017',
            'debut' => '2016-09-01',
            'fin' => '2017-08-31',
            'slug' => '2016-2017',
            'is_actuel' => false,
            'statut_id' => 1,
        ]);

        Saison::create([
            'designation' => 'Saison 2015-2016',
            'debut' => '2015-09-01',
            'fin' => '2016-08-31',
            'slug' => '2015-2016',
            'is_actuel' => false,
            'statut_id' => 1,
        ]);

        Saison::create([
            'designation' => 'Saison 2014-2015',
            'debut' => '2014-09-01',
            'fin' => '2015-08-31',
            'slug' => '2014-2015',
            'is_actuel' => false,
            'statut_id' => 1,
        ]);

        Saison::create([
            'designation' => 'Saison 2013-2014',
            'debut' => '2013-09-01',
            'fin' => '2014-08-31',
            'slug' => '2013-2014',
            'is_actuel' => false,
            'statut_id' => 1,
        ]);

        Saison::create([
            'designation' => 'Saison 2012-2013',
            'debut' => '2012-09-01',
            'fin' => '2013-08-31',
            'slug' => '2012-2013',
            'is_actuel' => false,
            'statut_id' => 1,
        ]);   

        Saison::create([
            'designation' => 'Saison 2011-2012',
            'debut' => '2011-09-01',
            'fin' => '2012-08-31',
            'slug' => '2011-2012',
            'is_actuel' => false,
            'statut_id' => 1,
        ]);

        Saison::create([
            'designation' => 'Saison 2010-2011',
            'debut' => '2010-09-01',
            'fin' => '2011-08-31',
            'slug' => '2010-2011',
            'is_actuel' => false,
            'statut_id' => 1,
        ]);

        Saison::create([
            'designation' => 'Saison 2009-2010',
            'debut' => '2009-09-01',
            'fin' => '2010-08-31',
            'slug' => '2009-2010',
            'is_actuel' => false,
            'statut_id' => 1,
        ]);

        Saison::create([
            'designation' => 'Saison 2008-2009',
            'debut' => '2008-09-01',
            'fin' => '2009-08-31',
            'slug' => '2008-2009',
            'is_actuel' => false,
            'statut_id' => 1,
        ]);

        Saison::create([
            'designation' => 'Saison 2007-2008',
            'debut' => '2007-09-01',
            'fin' => '2008-08-31',
            'slug' => '2007-2008',
            'is_actuel' => false,
            'statut_id' => 1,
        ]);

        Saison::create([
            'designation' => 'Saison 2006-2007',
            'debut' => '2006-09-01',
            'fin' => '2007-08-31',
            'slug' => '2006-2007',
            'is_actuel' => false,
            'statut_id' => 1,
        ]);

        Saison::create([
            'designation' => 'Saison 2005-2006',
            'debut' => '2005-09-01',
            'fin' => '2006-08-31',
            'slug' => '2005-2006',
            'is_actuel' => false,
            'statut_id' => 1,
        ]);

        Saison::create([
            'designation' => 'Saison 2004-2005',
            'debut' => '2004-09-01',
            'fin' => '2005-08-31',
            'slug' => '2004-2005',
            'is_actuel' => false,
            'statut_id' => 1,
        ]);

        Saison::create([
            'designation' => 'Saison 2003-2004',
            'debut' => '2003-09-01',
            'fin' => '2004-08-31',
            'slug' => '2003-2004',
            'is_actuel' => false,
            'statut_id' => 1,
        ]);            
    }    
}