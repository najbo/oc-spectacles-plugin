<?php namespace Digart\spectacles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartSpectaclesLoc extends Migration
{
    public function up()
    {
        Schema::create('digart_spectacles_loc', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();

            $table->string('loueur', 255)->nullable();
            $table->string('interlocuteur', 255)->nullable();
            $table->string('interlocuteur_institution', 255)->nullable();
            $table->string('telephone', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->text('adresse', 255)->nullable();

            $table->string('designation', 255)->nullable();
            $table->text('developpement')->nullable();
            $table->decimal('prix', 6, 2)->nullable();

            $table->integer('categorie_id')->nullable()->unsigned();
            $table->integer('tiers_id')->nullable()->unsigned();
            $table->integer('societe_id')->nullable()->unsigned();
            $table->integer('etendue_id')->nullable()->unsigned();
            $table->integer('institution_id')->nullable()->unsigned();
            $table->integer('lieu_id')->nullable()->unsigned();
            $table->integer('auteur_id')->nullable()->unsigned();

            $table->boolean('is_paye')->nullable();
            $table->boolean('is_actif')->nullable()->default(1);
            $table->boolean('is_frontend')->nullable()->default(1);

            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_spectacles_loc');
    }
}
