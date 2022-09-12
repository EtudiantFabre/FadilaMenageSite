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
        Schema::create('personne_a_prevenirs', function (Blueprint $table) {
            $table->bigIncrements('id_personne_a_prevenir');
            $table->string('nom');
            $table->string('prenom');
            $table->string('tel');
            $table->string('quartier');
            $table->string('profession')->nullable();
            $table->string('lien_de_parente');
            $table->integer('id_candidat');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_candidat')->references('id_candidat')->on('candidats');//->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personne_a_prevenirs');
    }
};
