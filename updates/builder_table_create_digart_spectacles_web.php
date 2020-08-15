<?php namespace Digart\spectacles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartSpectaclesWeb extends Migration
{
    public function up()
    {
        Schema::create('digart_spectacles_web', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('designation')->nullable();

          
            $table->string('title_programe_header', 255)->nullable();
            $table->text('txt_programme_header')->nullable();

            $table->string('title_programme_mission', 255)->nullable();
            $table->text('txt_programme_mission')->nullable();
            $table->text('txt_programme_mission_after')->nullable();
            $table->string('title_programme_location', 255)->nullable();
            $table->text('txt_programme_location')->nullable();
            $table->string('url_programme_location', 255)->nullable();
            $table->string('url_programme_location_texte', 255)->nullable();
            $table->boolean('url_programme_location_is_externe')->nullable();

            $table->string('title_abonnement', 255)->nullable();
            $table->text('txt_abonnement')->nullable();
            $table->text('txt_abonnement_after')->nullable();
            $table->string('url_abonnement', 255)->nullable();
            $table->string('url_abonnement_texte', 255)->nullable();
            $table->boolean('url_abonnement_is_externe')->nullable();

            $table->string('title_equipe', 255)->nullable();
            $table->text('txt_equipe')->nullable();
            $table->text('txt_equipe_after')->nullable();
            $table->string('url_equipe', 255)->nullable();
            $table->string('url_equipe_texte', 255)->nullable();
            $table->boolean('url_equipe_is_externe')->nullable();

            $table->string('title_location', 255)->nullable();
            $table->text('txt_location')->nullable();
            $table->text('txt_location_left')->nullable();
            $table->text('txt_location_right')->nullable();
            $table->string('url_location', 255)->nullable();
            $table->string('url_location_texte', 255)->nullable();
            $table->boolean('url_location_is_externe')->nullable();
            $table->boolean('is_show_locations')->nullable()->default(1);
            $table->string('doc_location', 255)->nullable();

            $table->string('title_historique', 255)->nullable();
            $table->text('txt_historique')->nullable();
            $table->text('txt_historique_left')->nullable();
            $table->text('txt_historique_right')->nullable();
            $table->text('timeline')->nullable();
            # $table->text('content')->nullable();
            $table->string('url_historique', 255)->nullable();
            $table->string('url_historique_texte', 255)->nullable();
            $table->boolean('url_historique_is_externe')->nullable();

            $table->string('title_sponsor', 255)->nullable();
            $table->string('title_sponsor_after', 255)->nullable();
            $table->text('txt_sponsor')->nullable();
            $table->text('txt_sponsor_after')->nullable();
            $table->string('url_sponsor', 255)->nullable();
            $table->string('url_sponsor_texte', 255)->nullable();
            $table->boolean('url_sponsor_is_externe')->nullable();  
            $table->text('sponsors')->nullable();
                      
            $table->boolean('is_actif')->nullable()->default(1);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();

            $table->string('title_presentation', 255)->nullable();
            $table->text('txt_presentation')->nullable();
            $table->text('txt_presentation_main')->nullable();

            $table->string('title_presentation_box1', 255)->nullable();
            $table->text('txt_presentation_box1')->nullable();
            $table->string('url_presentation_box1', 255)->nullable();
            $table->string('url_presentation_box1_texte', 255)->nullable();
            $table->boolean('url_presentation_box1_is_externe')->nullable(); 

            $table->string('url_presentation', 255)->nullable();
            $table->string('url_presentation_texte', 255)->nullable();
            $table->boolean('url_presentation_is_externe')->nullable();

            $table->string('title_dons', 255)->nullable();
            $table->text('txt_dons')->nullable();
            $table->text('txt_dons_main')->nullable();
            $table->text('txt_dons_banque')->nullable();
            $table->string('url_dons', 255)->nullable();
            $table->string('url_dons_texte', 255)->nullable();
            $table->boolean('url_dons_is_externe')->nullable();

            $table->string('title_technique', 255)->nullable();
            $table->text('txt_technique')->nullable();
            $table->text('txt_technique_main')->nullable();
            $table->text('title_technique_materiel')->nullable();
            $table->text('txt_technique_materiel')->nullable();
            $table->text('title_technique_highlight')->nullable();
            $table->text('txt_technique_highlight')->nullable();
            $table->text('materiel')->nullable();
            $table->string('url_technique', 255)->nullable();
            $table->string('url_technique_texte', 255)->nullable();
            $table->boolean('url_technique_is_externe')->nullable();            
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_spectacles_web');
    }
}