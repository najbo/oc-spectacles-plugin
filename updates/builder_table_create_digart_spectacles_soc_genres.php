<?php namespace Digart\spectacles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartSpectaclesSocietesGenres extends Migration
{
    public function up()
    {
        Schema::create('digart_spectacles_soc_genres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('societe_id')->unsigned();
            $table->integer('genre_id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->primary(['societe_id','genre_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_spectacles_soc_genres');
    }
}
