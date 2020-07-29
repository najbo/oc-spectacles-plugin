<?php namespace Digart\spectacles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;



class BuilderTableCreateDigartSpectaclesBlog extends Migration
{
    public function up()
    {
        Schema::create('digart_spectacles_blog', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('designation', 255);
            $table->string('slug', 255);
            $table->text('accroche')->nullable();
            $table->text('developpement')->nullable();
            $table->date('debut')->nullable();
            $table->date('fin')->nullable();
            $table->boolean('is_actif')->nullable()->default(1);
            $table->boolean('is_pinned')->nullable();
            $table->integer('etendue_id')->nullable()->unsigned();
            $table->string('url', 255)->nullable();
            $table->string('url_texte', 255)->nullable();
            $table->boolean('is_url_externe')->nullable();
            $table->integer('admin_id')->nullable()->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_spectacles_blog');
    }
}