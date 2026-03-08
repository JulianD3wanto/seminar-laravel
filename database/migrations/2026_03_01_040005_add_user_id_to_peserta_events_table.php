<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToPesertaEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('peserta_events', function (Blueprint $table) {
        $table->unsignedBigInteger('user_id')->nullable()->after('event_id');
    });
}

public function down()
{
    Schema::table('peserta_events', function (Blueprint $table) {
        $table->dropColumn('user_id');
    });
}
}
