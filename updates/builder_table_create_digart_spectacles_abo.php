<?php namespace Digart\spectacles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartSpectaclesAbo extends Migration
{
    public function up()
    {
        Schema::create('digart_spectacles_abo', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('titre', 255)->nullable();
            $table->text('developpement')->nullable();
            $table->text('explications')->nullable();
            $table->string('prix')->nullable();
            $table->string('url', 255)->nullable();
            $table->boolean('is_highlight')->nullable()->default(0);
            $table->boolean('is_actif')->nullable()->default(1);
            $table->integer('sort_order')->nullable()->unsigned();
            $table->integer('abonnement_groupe_id')->nullable()->unsigned();
            $table->date('debut')->nullable()->default(now());
            $table->date('fin')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_spectacles_abo');
    }
}
