<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleUserTable extends Migration
{



    public function up()
    {


    }
    public function down()
    {
        Schema::dropIfExists('role_user');
    }
}
