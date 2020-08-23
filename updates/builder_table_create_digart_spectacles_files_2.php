<?php namespace Digart\spectacles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartSpectaclesFiles2 extends Migration
{
    public function up()
    {
        Schema::create('digart_spectacles_files', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('filegroup_id')->nullable()->unsigned();
            $table->string('designation', 255)->nullable();
            $table->text('description')->nullable();
            $table->integer('sort_order')->nullable()->unsigned();
            $table->integer('auteur_id')->nullable()->unsigned();
            $table->boolean('is_actif')->nullable()->default(1);
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
