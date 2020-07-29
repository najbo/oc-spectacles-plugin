<?php namespace Digart\spectacles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartSpectaclesBlogEtendue extends Migration
{
    public function up()
    {
        Schema::create('digart_spectacles_blog_etendue', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('designation', 255);
            $table->text('developpement')->nullable();
            $table->integer('sort_order')->nullable()->unsigned();
            $table->boolean('is_actif')->nullable()->default(1);
            $table->boolean('is_frontend')->nullable();
            $table->boolean('is_intranet')->nullable();
            $table->boolean('is_communication')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_spectacles_blog_etendue');
    }
}
