<?php namespace Digart\spectacles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartSpectaclesSpectGenr extends Migration
{
    public function up()
    {
        Schema::create('digart_spectacles_spect_genr', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('spectacle_id')->unsigned();
            $table->integer('genre_id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->primary(['spectacle_id','genre_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_spectacles_spect_genr');
    }
}
