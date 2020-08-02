<?php namespace Digart\spectacles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartSpectaclesAbogrp extends Migration
{
    public function up()
    {
        Schema::create('digart_spectacles_abogrp', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();

            $table->string('titre', 255)->nullable();
            $table->text('texte_avant')->nullable();
            $table->text('texte_apres')->nullable();
            $table->date('debut')->nullable()->default(now());
            $table->date('fin')->nullable();
            $table->string('url', 255)->nullable();
            $table->string('url_texte', 255)->nullable();
            $table->integer('institution_id')->nullable()->unsigned();
            $table->integer('sort_order')->nullable()->unsigned();
            $table->boolean('is_actif')->nullable()->default(1);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_spectacles_abogrp');
    }
}
