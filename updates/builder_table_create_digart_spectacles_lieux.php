<?php namespace Digart\spectacles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartSpectaclesLieux extends Migration
{
    public function up()
    {
        Schema::create('digart_spectacles_lieux', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('designation', 255);
            $table->text('developpement')->nullable();
            $table->string('slug', 255);
            $table->string('adresse', 255)->nullable();
            $table->string('npa', 255)->nullable();
            $table->string('localite', 255)->nullable();
            $table->integer('sort_order')->nullable()->unsigned();
            $table->boolean('is_display')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_spectacles_lieux');
    }
}
