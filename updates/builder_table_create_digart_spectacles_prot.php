<?php namespace Digart\spectacles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartSpectaclesProt extends Migration
{
    public function up()
    {
        Schema::create('digart_spectacles_prot', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('spectacle_id')->unsigned();
            $table->date('date');
            $table->string('designation', 255)->nullable();
            $table->text('developpement')->nullable();
            $table->string('tiers_id')->nullable();
            $table->integer('admin_id')->unsigned()->nullable();
            $table->integer('pgenre_id')->nullable()->unsigned();
            $table->integer('pstatut_id')->nullable()->unsigned();
            $table->integer('sort_order')->nullable()->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_spectacles_prot');
    }
}
