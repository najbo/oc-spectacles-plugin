<?php namespace Digart\spectacles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartSpectaclesSpect extends Migration
{
    public function up()
    {
        Schema::create('digart_spectacles_spect', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('titre_principal', 255);
            $table->string('titre_secondaire', 255)->nullable();
            $table->text('accroche')->nullable();
            $table->text('developpement')->nullable();
            $table->text('remarques')->nullable();
            $table->text('parties')->nullable();
            $table->integer('saison_id')->nullable()->unsigned();
            $table->integer('statut_id')->nullable()->unsigned();
            $table->integer('institution_id')->nullable()->unsigned();
            $table->integer('emplacement_id')->nullable()->unsigned();
            $table->boolean('is_reservation')->nullable();
            $table->boolean('is_public')->nullable();
            $table->integer('agent_id')->nullable()->unsigned();
            $table->integer('artiste_id')->nullable()->unsigned();
            $table->integer('duree')->nullable()->unsigned();
            $table->integer('capacite_num')->nullable()->unsigned();
            $table->string('capacite_txt', 255)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_spectacles_spect');
    }
}
