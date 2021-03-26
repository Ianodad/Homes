<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bids', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedInteger('home_id');
            $table->unsignedInteger('user_id');
            $table->integer('starting_bid_price');
            $table->integer('current_bid');
            $table->timestamp('count_down_timer');
            $table->timestamp('current_bid_time');
            $table->integer('minimum_increment_bid');
            $table->integer('winning bid');
            $table->integer('total_bids');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bids');
    }
}
