<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul', 50);
            $table->string('kategori');
            $table->string('deskripsi', 1000);
            $table->string('alamat', 100);
            $table->string('jam_event');
            $table->string('tgl_mulai');
            $table->integer('kuota_peserta');
            $table->integer('harga_tiket');
            $table->string('username');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event');
    }
}
