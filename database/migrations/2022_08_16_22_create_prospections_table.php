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
        Schema::create('prospections', function (Blueprint $table) {
            $table->bigIncrements('id_prospection');
            $table->string('raison_social');
            $table->date('date');
            //$table->integer('num_ordre');
            $table->string('canal');
            $table->string('competence_rechercher');
            $table->string('type_maison');
            $table->integer('nbre_de_chambre');
            $table->integer('nbre_wc_douche');
            $table->integer('taille_famille');
            $table->string('info_complementaire');
            $table->integer('budget');
            $table->string('actions_menees');
            $table->string('conclusion');
            $table->integer('id_agent');
            $table->integer('id_client');
            $table->integer('id_facture');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_agent')->references('id_agent')->on('agents');//->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_client')->references('id_client')->on('clients');//->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_facture')->references('id_facture')->on('factures');//->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prospections');
    }
};
