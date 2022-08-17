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
        Schema::create('ponctuels', function (Blueprint $table) {
            $table->bigIncrements('id_ponctuel');
            $table->date('date');
            $table->string('nom');
            $table->string('prenom');
            $table->json('adresse');
            $table->string('forfait');
            $table->integer('montant_ttc');
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
        Schema::dropIfExists('ponctuels');
    }
};
