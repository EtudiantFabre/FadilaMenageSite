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
        Schema::create('evaluations', function (Blueprint $table) {
            $table->bigIncrements('id_evaluation');
            $table->string('periodicite');
            $table->string('debut_periode');
            $table->string('fin_periode');
            $table->string('note_sur_vingt');
            $table->string('commentaire');
            $table->string('sugestion');
            $table->integer('id_agent');
            $table->timestamps();
            $table->softDeletes();
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
        Schema::dropIfExists('evaluations');
    }
};
