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
        Schema::create('contrats', function (Blueprint $table) {
            $table->bigIncrements('id_contrat')->unique();
            $table->integer('agent');
            $table->integer('client');
            $table->date('date_contrat');
            $table->date('debut_contrat');
            $table->date('echeance_contrat');
            $table->string('service');
            $table->string('local');
            $table->string('adresse');
            $table->string('temps');
            $table->string('frequence');
            $table->string('agent_assigne');
            $table->string('facturation');
            $table->string('salaire');
            $table->string('tva');
            $table->string('marge_nette');
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('client')->references('id_client')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('agent')->references('id_agent')->on('agents')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contrats');
    }
};
