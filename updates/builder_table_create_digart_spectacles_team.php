<?php namespace Digart\spectacles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartSpectaclesTeam extends Migration
{
    public function up()
    {
        Schema::create('digart_spectacles_team', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('titre', 255)->nullable();
            $table->text('membres')->nullable();
            $table->text('texte_avant')->nullable();
            $table->text('texte_apres')->nullable();
            $table->integer('sort_order')->nullable()->unsigned();
            $table->string('url', 255)->nullable();
            $table->string('url_texte', 255)->nullable();
            $table->boolean('is_accent')->nullable();

            $table->integer('type_id')->unsigned()->default(1);
            $table->boolean('is_photo')->nullable()->default(1);
            $table->boolean('is_fonction')->nullable()->default(1);
            $table->boolean('is_telephone')->nullable()->default(1);
            $table->boolean('is_linkedin')->nullable()->default(1);
            $table->boolean('is_email')->nullable()->default(1);
            $table->boolean('is_complement')->nullable()->default(1);

            $table->boolean('is_actif')->nullable()->default(1);
            $table->integer('institution_id')->nullable()->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_spectacles_team');
    }
}
