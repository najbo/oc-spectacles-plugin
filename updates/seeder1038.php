<?php namespace Digart\spectacles\Updates;

use Seeder;
use DigArt\Spectacles\Models\Abonnement;

class Seeder1038 extends Seeder
{
    public function run()
    {
        Abonnement::truncate();

        Abonnement::create([
            'titre' => '<p>Carte <br/><strong>Refrain</strong></p>',
            'developpement' => '<p>Elle donne droit à une réduction de CHF 5.- sur chaque spectacle de la Tour de Rive, valable pour 1 personne.</p>',
            'prix' => 'CHF 30.- / saison',
            'sort_order' => 1,
            'abonnement_groupe_id' => 1,
        ]);

        Abonnement::create([
            'titre' => '<p>Carte <br/><strong>Couple-Refrain</strong></p>',
            'developpement' => '<p>Elle accorde les mêmes droits que la carte REFRAIN mais elle est valable pour 2 personnes.</p>',
            'prix' => 'CHF 50.- / saison',
            'sort_order' => 2,
            'abonnement_groupe_id' => 1,
        ]);

        Abonnement::create([
            'titre' => '<p>Carte <br/><strong>Tour de Rive</strong></p>',
            'developpement' => '<p>C\'est une carte soutien qui vous donne droit à deux billets avec réduction de CHF 5.- sur chaque spectacle présenté dans notre théâtre, elle est donc valable pour 2 personnes. De plus, un spectacle de votre choix à 25.- vous est offert (une seule entrée).</p>',
            'prix' => 'CHF 100.- / saison',
            'sort_order' => 3,
            'abonnement_groupe_id' => 1,
        ]);

        Abonnement::create([
            'titre' => '<p>Carte <br/><strong>Parrain</strong></p>',
            'developpement' => '<p>D\'une valeur de CHF 320.- ou plus, elle donne droit à l\'entrée gratuite aux spectacles de la saison (septembre à mai), valable pour 2 personnes. Elle est non transmissible</p>',
            'prix' => 'Dès CHF 320.- / saison',
            'sort_order' => 4,
            'abonnement_groupe_id' => 1,
        ]);

        Abonnement::create([
            'titre' => '<p>Carte <br/><strong>Entreprise</strong></p>',
            'developpement' => '<p><span class="new uppercase bg-vermillion-500 text-white px-2 py-1 mr-2 text-sm">Nouveau</span>D\'une valeur de CHF 500.- et plus, elle donne droit à l\'entrée gratuite aux spectacles de la saison (septembre à mai), valable pour 2 personnes de votre entreprise (transmissible), accompagné chaque fois d\'une collation.<p>',
            'prix' => 'Dès CHF 500.- / saison',
            'sort_order' => 5,
            'abonnement_groupe_id' => 1,
        ]);                                     
    }
}