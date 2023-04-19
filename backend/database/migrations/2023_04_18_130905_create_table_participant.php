<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableParticipant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participant', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom',100);
            $table->string('num_cni',10);
            $table->integer('age');
            $table->char('sexe')->default('masculin');
            $table->string('status')->default('electeur');
            $table->string('login',30);
            $table->string('pwd',100);
            $table->string('email',30)->nullable;
            $table->string('etat',1)->defaut('0');
            $table->string('telephone',15)->nullable();
            $table->unsignedInteger('id_region');
            $table->unsignedInteger('id_vote');
            $table->foreign('id_region')->references('id')->on('regions')->onDelete('cascade');
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
        Schema::dropIfExists('participant');
    }
}
