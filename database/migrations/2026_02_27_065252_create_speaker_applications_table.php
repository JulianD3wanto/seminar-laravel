<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpeakerApplicationsTable extends Migration
{
    public function up()
    {
        Schema::create('speaker_applications', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nama', 120);
            $table->string('email', 150);
            $table->string('whatsapp', 30);
            $table->string('perusahaan', 150);
            $table->string('website')->nullable();
            $table->string('sosmed');
            $table->text('pengalaman');
            $table->enum('pernah', ['pernah', 'tidak']);
            $table->text('keterangan_webinar');

            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');

            // info reCAPTCHA (optional, tapi berguna buat audit)
            $table->decimal('recaptcha_score', 3, 2)->nullable();
            $table->string('recaptcha_action')->nullable();
            $table->string('recaptcha_hostname')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('speaker_applications');
    }
}
