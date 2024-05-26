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
        Schema::create('suivis', function (Blueprint $table) {
            $table->bigIncrements('id_suivis');
            $table->date('date_passage');
            $table->string('heure_passage');
            $table->string('acces_residence');
            $table->string('verif_presence_agent');
            $table->string('presence_agent');
            $table->string('heure_arrive_agent');
            $table->string('pres_corporel_vestimentaire');
            $table->string('entretient_plafond')->nullable();
            $table->string('essuyage_vitre')->nullable();
            $table->string('depousierage_appareil')->nullable();
            $table->string('depousierage_meuble')->nullable();
            $table->string('entretient_corbeil')->nullable();
            $table->string('entretient_sanitaire')->nullable();
            $table->string('balayage_netoyage_sol')->nullable();
            $table->string('repassage')->nullable();
            $table->string('autres_traveaux')->nullable();
            $table->string('probleme')->nullable();
            $table->string('commentaire')->nullable();
            $table->integer('id_personnel');
            $table->integer('id_agent');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_personnel')->references('id_personnel')->on('personnels');//->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_agent')->references('id_agent')->on('agents');//->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suivis');
    }
};
