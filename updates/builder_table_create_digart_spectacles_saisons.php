<?php namespace Digart\spectacles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartSpectaclesSaisons extends Migration
{
    public function up()
    {
        Schema::create('digart_spectacles_saisons', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('designation', 255);
            $table->text('developpement')->nullable();
            $table->date('debut');
            $table->date('fin');
            $table->string('slug', 255);
            $table->boolean('is_actuel')->nullable();
            $table->boolean('is_archive')->nullable()->default(0);
            $table->boolean('statut_id')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_spectacles_saisons');
    }
}
