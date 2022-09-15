<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experience_du_candidats', function (Blueprint $table) {
            $table->bigIncrements('id_experience');
            $table->integer('nbr_annee_experience');
            $table->integer('nbr_voiture_conduit')->nullable();
            $table->string('type_voiture')->nullable()->default('Non renseigné');
            $table->string('type_contrat')->nullable()->default('Non renseigné');
            $table->string('nom_employeur')->nullable()->default('Non renseigné');
            $table->string('numero_employeur')->nullable()->default('Non renseigné');
            $table->integer('dernier_salaire');
            $table->integer('nombre_enfants_garde')->nullable();
            $table->date('date_demission')->nullable();
            $table->integer('candidat');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('candidat')->references('id_candidat')->on('candidats')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experience_du_candidats');
    }
};
