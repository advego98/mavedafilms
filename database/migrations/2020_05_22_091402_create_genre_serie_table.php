<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenreSerieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genre_serie', function (Blueprint $table) {
            $table->integer('genre_id')->unsigned();
            $table->integer('serie_id')->unsigned();
            $table->timestamps();
            $table->foreign('genre_id')->references('id_genre')->on('genres')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('genre_serie');
    }
}
