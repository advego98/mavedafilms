<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActorMovieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actor_movie', function (Blueprint $table) {
            $table->integer('actor_id')->unsigned();
            $table->integer('movie_id')->unsigned();
            $table->timestamps();
            $table->foreign('actor_id')->references('id_actor')->on('actors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('movie_id')->references('movie_id')->on('movies')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actor_movie');
    }
}
