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
        Schema::create('agent_ponctuels', function (Blueprint $table) {
            $table->bigIncrements('id_agent_ponctuel');
            $table->integer('id_agent');
            $table->integer('id_ponctuel');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_agent')->references('id_agent')->on('agents');//->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_ponctuel')->references('id_ponctuel')->on('ponctuels');//->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agent_ponctuels');
    }
};
