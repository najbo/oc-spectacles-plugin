<?php namespace Digart\spectacles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartSpectaclesUserFct extends Migration
{
    public function up()
    {
        Schema::create('digart_spectacles_user_fct', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('user_id')->unsigned();
            $table->integer('fonction_id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->primary(['user_id','fonction_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_spectacles_user_fct');
    }
}
