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
        Schema::create('factures', function (Blueprint $table) {
            $table->bigIncrements('id_facture');
            $table->integer('remuneration_brut');
            $table->integer('remuneration_net');
            $table->integer('conciliation_social');
            $table->integer('provision_sociales');
            $table->integer('cotisation_provisoir_conges');
            $table->integer('total_debour');
            $table->integer('frais');
            $table->integer('tva');
            $table->integer('total_ttc');
            $table->integer('id_prospection');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_prospection')->references('id_prospection')->on('prospections');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factures');
    }
};
