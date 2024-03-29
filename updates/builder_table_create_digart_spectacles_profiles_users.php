<?php namespace Digart\spectacles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartSpectaclesProfilesUsers extends Migration
{
    public function up()
{
    Schema::create('digart_spectacles_profiles_users', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->integer('user_id')->unsigned()->index();
        $table->string('mobile')->nullable();
        $table->string('adresse')->nullable();
        $table->string('npa', 10)->nullable();
        $table->string('localite', 50)->nullable();
        $table->text('description')->nullable();
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
        $table->timestamp('deleted_at')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('digart_spectacles_profiles_users');
}
}
