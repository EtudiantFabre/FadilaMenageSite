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
            $table->string('rue');
            $table->string('email');
            $table->string('situation_familiale');
            $table->string('enfants_encharge');
            $table->string('profession');
            $table->string('photo_id');
            $table->string('avatar');
            
            $table->string('poste_candidate');
            $table->string('horaire_travail_souhaite');
            $table->string('objectif');
            $table->string('qualite_personnelles');
            $table->string('savoir_faire');
            $table->string('disponible_a_loger');
            $table->string('nature_contrat');
            $table->string('horaire_travail_passe');
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
