<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->increments('subscription_id');
            $table->integer('plan_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamp('timestamp_from')->nullable();
            $table->timestamp('timestamp_to')->nullable();
            $table->bigInteger('credit_card');
            $table->string('credit_card_name');
            $table->string('credit_card_lastname');
            $table->string('due_date');
            $table->integer('cvv');
            $table->foreign('plan_id')->references('plan_id')->on('plans')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('user_id')->references('id_user')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscriptions');
    }
}
