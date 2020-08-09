<?php namespace Digart\spectacles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartSpectaclesPlanification extends Migration
{
    public function up()
    {
        Schema::create('digart_spectacles_planification', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('representation_id')->unsigned()->nullable();
            $table->integer('benevole_id')->unsigned()->nullable();
            $table->integer('fonction_id')->unsigned()->nullable();
            $table->string('designation')->nullable();
            $table->dateTime('debut')->nullable();
            $table->dateTime('fin')->nullable();
            $table->boolean('is_confirmed')->nullable();
            $table->boolean('is_canceled')->nullable();
            $table->boolean('is_actif')->nullable()->default(1);
            $table->integer('auteur_id')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_spectacles_planification');
    }
}
