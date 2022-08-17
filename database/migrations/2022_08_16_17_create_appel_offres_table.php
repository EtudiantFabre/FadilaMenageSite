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
        Schema::create('appel_offres', function (Blueprint $table) {
            $table->bigIncrements('id_appel');
            $table->string('classement');
            $table->json('adresse_autorite_contractante');
            $table->date('date_depot');
            $table->string('domaine_postule');
            $table->integer('prix_achat_dossier');
            $table->string('caution_bancaire');
            $table->string('resultat');
            $table->string('debut_prestation');
            $table->integer('id_societe');
            $table->integer('id_personnel');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_societe')->references('id_societe')->on('societes');//->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_personnel')->references('id_personnel')->on('personnels');//->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appel_offres');
    }
};
