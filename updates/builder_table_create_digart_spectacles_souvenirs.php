<?php namespace Digart\spectacles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartSpectaclesSouvenirs extends Migration
{
    public function up()
    {
        Schema::create('digart_spectacles_souvenirs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('spectacle_id')->unsigned();
            $table->integer('representation_id')->unsigned()->nullable();
            $table->string('photographe')->nullable();
            $table->string('website')->nullable();
            $table->string('email')->nullable();
            $table->string('photographe_id')->nullable();
            $table->string('designation')->nullable();
            $table->text('complement')->nullable();
            $table->boolean('is_actif')->nullable()->default(1);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_spectacles_souvenirs');
    }
}
