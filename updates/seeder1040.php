<?php namespace Digart\spectacles\Updates;

use Seeder;
use DigArt\Spectacles\Models\AbonnementGroupe;

class Seeder1040 extends Seeder
{
    public function run()
    {
        AbonnementGroupe::truncate();

        AbonnementGroupe::create([
            'titre' => 'Abonnements',
            'sort_order' => 1,
            'texte_avant' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p><p>En souscrivant un abonnement début janvier, vous bénéficiez d\'une réduction de 40% sur les prix ci-dessous (vous ne payez donc que le 60% du prix).</p>',
            'texte_apres' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',
            'url' => '/',
            'url_texte' => 'Vers le formulaire de contact',
        ]); 
    
        AbonnementGroupe::create([
            'titre' => 'Autres prestations',
            'sort_order' => 2,
            'texte_avant' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est ligula, hendrerit quis feugiat at, placerat sit amet ipsum. Sed varius rhoncus sagittis. Pellentesque sodales blandit augue sed consectetur. Nulla facilisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc tempus iaculis magna, vitae hendrerit enim pharetra quis.</p>',
        ]); 
    }
}