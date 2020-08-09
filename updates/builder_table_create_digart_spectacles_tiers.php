<?php namespace Digart\spectacles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartSpectaclesTiers extends Migration
{
    public function up()
    {
        Schema::create('digart_spectacles_tiers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('raison_sociale', 255)->nullable();
            $table->string('nom', 255)->nullable();
            $table->string('prenom', 255)->nullable();
            $table->text('adresse')->nullable();
            $table->string('telephone', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('website', 255)->nullable();
            $table->text('remarques')->nullable();
            $table->boolean('is_actif')->nullable()->default(1);
            $table->integer('societe_id')->nullable();
            $table->integer('auteur_id')->nullable();
            $table->integer('sexe_id')->nullable();
            #$table->integer('type_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_spectacles_tiers');
    }
}