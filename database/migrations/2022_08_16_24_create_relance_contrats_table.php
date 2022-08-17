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
        Schema::create('relance_contrats', function (Blueprint $table) {
            $table->bigIncrements('id_relance');
            $table->bigInteger('contrat');
            $table->date('date_relance');
            $table->date('client');
            $table->string('motif');
            $table->date('situation');
            $table->integer('nbr_contrat_encours');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('contrat')->references('id_contrat')->on('contrats');//->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relance_contrats');
    }
};
