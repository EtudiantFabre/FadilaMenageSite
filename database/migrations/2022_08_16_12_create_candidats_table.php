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
        Schema::create('candidats', function (Blueprint $table) {
            $table->bigIncrements('id_candidat');
            $table->string('nom');
            $table->string('prenom');
            $table->date('date_naissance');
            $table->string('lieu_naissance');
            $table->string('genre');
            $table->string('nationalite');
            $table->string('piece_identite');
            $table->string('numero_de_piece');
            $table->date('date_delivrer');
            $table->date('date_expiration');
            $table->string('ville_residence');
            $table->string('quartier');
            $table->string('rue')->nullable();
            $table->string('email')->nullable();
            $table->string('situation_familiale');
            $table->string('enfants_encharge')->nullable();
            $table->string('profession')->nullable();
            $table->string('avatar');
            $table->string('telephone');
            $table->string('poste_candidate');
            $table->string('horaire_travail_souhaite');
            $table->string('objectif')->nullable();
            $table->string('qualite_personnelles')->nullable();
            $table->string('savoir_faire')->nullable();
            $table->string('disponible_a_loger');
            $table->string('nature_contrat');
            $table->string('horaire_travail_passe')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidats');
    }
};
