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
            $table->integer('nbr_voiture_conduit');
            $table->string('type_voiture');
            $table->string('type_contrat');
            $table->string('adresse_societe');
            $table->string('adresse_employeur');
            $table->integer('dernier_salaire');
            $table->date('date_demission');
            $table->integer('pretention_salarial');
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
        Schema::dropIfExists('experience_du_candidats');
    }
};
