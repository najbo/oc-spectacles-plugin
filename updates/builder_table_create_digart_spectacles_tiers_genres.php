<?php namespace Digart\spectacles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartSpectaclesTiersGenres extends Migration
{
    public function up()
    {
        Schema::create('digart_spectacles_tiers_genres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('tiers_id')->unsigned();
            $table->integer('genre_id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->primary(['tiers_id','genre_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_spectacles_tiers_genres');
    }
}
