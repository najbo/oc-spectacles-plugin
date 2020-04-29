<?php namespace Digart\spectacles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartSpectaclesSpectArt extends Migration
{
    public function up()
    {
        Schema::create('digart_spectacles_spect_art', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('spectacle_id')->unsigned();
            $table->integer('artiste_id')->unsigned();
            $table->string('description', 255)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->primary(['spectacle_id','artiste_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_spectacles_spect_art');
    }
}
