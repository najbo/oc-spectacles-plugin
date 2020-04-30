<?php namespace Digart\spectacles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartSpectaclesInstit extends Migration
{
    public function up()
    {
        Schema::create('digart_spectacles_instit', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('designation', 255);
            $table->string('abreviation', 50)->nullable();
            $table->text('developpement')->nullable();
            $table->string('adresse', 255)->nullable();
            $table->string('npa', 255)->nullable();
            $table->string('localite', 255)->nullable();
            $table->string('tel_administration', 255)->nullable();
            $table->string('tel_principal', 255)->nullable();
            $table->string('tel_reservations', 255)->nullable();
            $table->string('email_principal', 255)->nullable();
            $table->string('email_reservation', 255)->nullable();
            $table->string('website', 255)->nullable();
            $table->boolean('is_defaut')->nullable();
            $table->integer('sort_order')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_spectacles_instit');
    }
}