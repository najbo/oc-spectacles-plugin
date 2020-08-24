<?php namespace Digart\spectacles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartSpectaclesSocials extends Migration
{
    public function up()
    {
        Schema::create('digart_spectacles_socials', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('designation', 255);
            $table->string('url', 255)->nullable();
            $table->string('abreviation', 50)->nullable();
            $table->string('url_profile', 255)->nullable();
            $table->string('icon', 255)->nullable();
            $table->string('iconify', 255)->nullable();
            $table->integer('sort_order')->nullable()->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->boolean('is_actif')->nullable()->default(1);
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_spectacles_socials');
    }
}
