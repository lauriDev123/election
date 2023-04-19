<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableElection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('election', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_election');
            $table->string('label');
            $table->string('description');
            $table->string('statut');
            $table->unsignedInteger('id_vote');
            $table->foreign('id_vote')->references('id')->on('votes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('election');
    }
}
