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
        Schema::create('ventes', function (Blueprint $table) {
            $table->bigIncrements('id_vente');
            $table->integer('personnel');
            $table->string('mois');
            $table->integer('contrat_permanent');
            $table->integer('contrat_permanent_perdus');
            $table->integer('contrat_gagne');
            $table->integer('solde_contrat');
            $table->integer('contrat_ponctuel');
            $table->string('marche_public');
            $table->integer('total_client_findu_mois');
            $table->longText('commentaire')->nullable();
            $table->integer('ca_total_mensuel_realiser');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('personnel')->references('id_personnel')->on('personnels');//->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventes');
    }
};
