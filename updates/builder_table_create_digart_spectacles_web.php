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

            $table->string('title_abonnement', 255)->nullable();
            $table->text('txt_abonnement')->nullable();

            $table->boolean('is_actif')->nullable()->default(1);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_spectacles_web');
    }
}