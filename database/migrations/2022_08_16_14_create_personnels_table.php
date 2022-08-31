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
        Schema::create('personnels', function (Blueprint $table) {
            $table->bigIncrements('id_personnel');
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
            $table->integer('enfants_en_charge');
            $table->string('profession');
            $table->string('avatar');
            $table->integer('salaire');
            $table->string('post_ocuper');
            $table->string('nature_contrat');
            $table->string('telephone');
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
        Schema::dropIfExists('personnels');
    }
};
