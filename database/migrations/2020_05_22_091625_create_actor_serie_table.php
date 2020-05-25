<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActorSerieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actor_serie', function (Blueprint $table) {
            $table->integer('actor_id')->unsigned();
            $table->integer('serie_id')->unsigned();
            $table->timestamps();
            $table->foreign('actor_id')->references('id_actor')->on('actors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('serie_id')->references('serie_id')->on('series')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actor_serie');
    }
}
