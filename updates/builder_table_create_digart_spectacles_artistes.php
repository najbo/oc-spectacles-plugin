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
            $table->string('nom_civil', 255)->nullable();
            $table->string('prenom_civil', 255)->nullable();
            $table->string('slug', 255)->nullable();
            $table->string('classement', 255)->nullable();
            $table->text('adresse', 255)->nullable();
            $table->string('lieu', 255)->nullable();
            $table->string('pays', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('telephone', 255)->nullable();
            $table->integer('agent_id')->nullable()->unsigned();
            $table->text('bio')->nullable();
            $table->text('membres')->nullable();
            $table->boolean('is_frontend_bio')->nullable()->default(1);
            $table->text('remarques')->nullable();
            $table->text('memo')->nullable();
            $table->text('liens_socials')->nullable();
            $table->text('rs')->nullable();
            $table->boolean('is_groupe')->nullable();
            $table->boolean('is_actif')->nullable()->default(1);

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
