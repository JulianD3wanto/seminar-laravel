<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // ubah nama table dari users_events menjadi joins
        Schema::create('users_events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            // create foreign key
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('event_id');

            // connect foreign key
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('event_id')->references('id')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_events');
    }
}
