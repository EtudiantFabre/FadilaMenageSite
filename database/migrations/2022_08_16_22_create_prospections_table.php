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
            $table->date('date_prospection');
            $table->string('canal');
            $table->string('competence_rechercher');
            $table->string('type_maison')->nullable();
            $table->integer('nbre_de_chambre')->nullable();
            $table->integer('nbre_wc_douche')->nullable();
            $table->integer('taille_famille')->nullable();
            $table->string('info_complementaire')->nullable();
            $table->integer('budget');
            $table->string('actions_menees')->nullable();
            $table->string('aboutissement')->nullable();
            $table->integer('id_agent');
            $table->integer('id_client');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_agent')->references('id_agent')->on('agents');//->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_client')->references('id_client')->on('clients');//->onDelete('cascade')->onUpdate('cascade');
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
