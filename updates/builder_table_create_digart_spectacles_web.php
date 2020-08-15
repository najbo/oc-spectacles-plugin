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

          
            $table->string('programme_header_title', 255)->nullable();
            $table->text('programme_header_txt')->nullable();

            $table->string('programme_mission_title', 255)->nullable();
            $table->text('programme_mission_txt')->nullable();
            $table->text('programme_mission_txt_after')->nullable();
            $table->string('programme_location_title', 255)->nullable();
            $table->text('programme_location_txt')->nullable();
            $table->string('programme_location_url', 255)->nullable();
            $table->string('programme_location_url_txt', 255)->nullable();
            $table->boolean('programme_location_url_isexterne')->nullable();

            $table->string('abonnement_title', 255)->nullable();
            $table->text('abonnement_txt')->nullable();
            $table->text('txt_abonnement_after')->nullable();
            $table->string('url_abonnement', 255)->nullable();
            $table->string('url_abonnement_texte', 255)->nullable();
            $table->boolean('url_abonnement_is_externe')->nullable();

            $table->string('equipe_title', 255)->nullable();
            $table->text('equipe_txt')->nullable();
            $table->text('equipe_after_txt')->nullable();
            $table->string('equipe_url', 255)->nullable();
            $table->string('equipe_url_txt', 255)->nullable();
            $table->boolean('equipe_url_txt_isexterne')->nullable();

            $table->string('location_title', 255)->nullable();
            $table->text('location_txt')->nullable();
            $table->text('location_left_txt')->nullable();
            $table->text('location_right_txt')->nullable();
            $table->string('location_url', 255)->nullable();
            $table->string('location_url_txt', 255)->nullable();
            $table->boolean('location_url_isexterne')->nullable();
            $table->boolean('location_isshow_locations')->nullable()->default(1);
            $table->string('doc_location', 255)->nullable();

            $table->string('historique_title', 255)->nullable();
            $table->text('historique_txt')->nullable();
            $table->text('historique_left_txt')->nullable();
            $table->text('historique_right_txt')->nullable();
            $table->text('timeline')->nullable();
            # $table->text('content')->nullable();
            $table->string('historique_url', 255)->nullable();
            $table->string('historique_url_txt', 255)->nullable();
            $table->boolean('historique_url_isexterne')->nullable();

            $table->string('sponsor_title', 255)->nullable();
            $table->string('sponsor_after_title', 255)->nullable();
            $table->text('sponsor_txt')->nullable();
            $table->text('sponsor_after_txt')->nullable();
            $table->string('sponsor_url', 255)->nullable();
            $table->string('sponsor_url_txt', 255)->nullable();
            $table->boolean('sponsor_url_isexterne')->nullable();  
            $table->text('sponsors')->nullable();
                      
            $table->boolean('is_actif')->nullable()->default(1);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();

            $table->string('presentation_title', 255)->nullable();
            $table->text('presentation_txt')->nullable();
            $table->text('presentation_main_txt')->nullable();

            $table->string('presentation_box1_title', 255)->nullable();
            $table->text('presentation_box1_txt')->nullable();
            $table->string('presentation_box1_url', 255)->nullable();
            $table->string('presentation_box1_url_txt', 255)->nullable();
            $table->boolean('presentation_box1_url_isexterne')->nullable(); 

            $table->string('presentation_url', 255)->nullable();
            $table->string('presentation_url_txt', 255)->nullable();
            $table->boolean('presentation_url_isexterne')->nullable();

            $table->string('dons_title', 255)->nullable();
            $table->text('dons_txt')->nullable();
            $table->text('txt_dons_main')->nullable();
            $table->text('dons_banque')->nullable();
            $table->string('dons_url', 255)->nullable();
            $table->string('dons_url_txt', 255)->nullable();
            $table->boolean('dons_url_isexterne')->nullable();

            $table->string('technique_title', 255)->nullable();
            $table->text('technique_txt')->nullable();
            $table->text('txt_technique_main')->nullable();
            $table->text('technique_materiel_title')->nullable();
            $table->text('technique_materiel_txt')->nullable();
            $table->text('technique_highlight_title')->nullable();
            $table->text('technique_highlight_txt')->nullable();
            $table->text('materiel')->nullable();
            $table->string('technique_url', 255)->nullable();
            $table->string('technique_url_txt', 255)->nullable();
            $table->boolean('technique_url_isexterne')->nullable();            
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_spectacles_web');
    }
}