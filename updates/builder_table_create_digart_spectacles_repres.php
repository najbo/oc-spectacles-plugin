<?php namespace Digart\spectacles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartSpectaclesRepres extends Migration
{
    public function up()
    {
        Schema::create('digart_spectacles_repres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('spectacle_id')->nullable();
            $table->dateTime('debut');
            $table->dateTime('fin')->nullable();
            $table->string('designation', 255)->nullable();
            $table->text('developpement')->nullable();
            $table->integer('duree_specifique')->nullable();
            $table->string('prix_spectifique', 255)->nullable();
            $table->integer('capacite_specifique')->nullable()->unsigned();
            $table->integer('admin_id')->unsigned()->nullable();
            $table->integer('lieu_id')->nullable()->unsigned();
            $table->integer('statut_id')->nullable()->unsigned();
            $table->boolean('is_canceled')->nullable();
            $table->boolean('is_full')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_spectacles_repres');
    }
}
