<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleUserTable extends Migration
{



    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('user_id')->references('id_profile')->on('profiles')->onDelete('cascade')->onUpdate('cascade');

        });
    }
    public function down()
    {
        Schema::dropIfExists('role_user');
    }
}
