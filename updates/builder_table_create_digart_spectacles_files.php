<?php namespace Digart\spectacles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartSpectaclesFiles extends Migration
{
    public function up()
    {
        Schema::create('digart_spectacles_files', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('designation', 255)->nullable();
            $table->text('description')->nullable();
            $table->integer('etendue')->nullable()->unsigned();
            $table->bigInteger('is_actif')->nullable()->default(1);
            $table->boolean('is_vedette')->nullable()->default(0);
            $table->integer('auteur_id')->nullable()->unsigned();
            $table->integer('sort_order')->nullable()->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_spectacles_files');
    }
}