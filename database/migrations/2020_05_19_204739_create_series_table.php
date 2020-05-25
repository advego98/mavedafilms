<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series', function (Blueprint $table) {
            $table->increments('serie_id');
            $table->string('code_serie')->unique();
            $table->string('title');
            $table->longText('description');
            $table->integer('year');
            $table->integer('rating');
            $table->boolean('featuring');
            $table->integer('kid_restriction');
            $table->string('url');
            $table->string('duration');
            $table->string('cover');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('series');
    }
}
