<?php namespace Digart\spectacles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartSpectaclesSpectCat extends Migration
{
    public function up()
    {
        Schema::create('digart_spectacles_spect_cat', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('spectacle_id')->unsigned();
            $table->integer('categorie_id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->primary(['spectacle_id','categorie_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_spectacles_spect_cat');
    }
}
