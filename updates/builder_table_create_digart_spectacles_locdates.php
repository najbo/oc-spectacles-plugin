<?php namespace Digart\spectacles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartSpectaclesLocdates extends Migration
{
    public function up()
    {
        Schema::create('digart_spectacles_locdates', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('location_id')->nullable()->unsigned();
            $table->dateTime('debut');
            $table->dateTime('fin')->nullable();
            $table->string('designation', 255)->nullable();
            $table->text('developpement')->nullable();
            $table->integer('categorie_id')->nullable()->unsigned();
            $table->boolean('is_actif')->nullable()->default(1);
            $table->boolean('is_frontend')->nullable()->default(1);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_spectacles_locdates');
    }
}
