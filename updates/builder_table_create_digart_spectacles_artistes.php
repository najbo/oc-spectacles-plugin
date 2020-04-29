<?php namespace Digart\spectacles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartSpectaclesArtistes extends Migration
{
    public function up()
    {
        Schema::create('digart_spectacles_artistes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('designation', 255);
            $table->string('slug', 255)->nullable();
            $table->string('classement', 255)->nullable();
            $table->integer('agent_id')->nullable()->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_spectacles_artistes');
    }
}
