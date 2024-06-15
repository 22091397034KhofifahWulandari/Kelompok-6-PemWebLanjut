<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelaporansTable extends Migration
{
    public function up()
    {
        Schema::create('pelaporans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Menambahkan kolom 'user_id' untuk mengetahui pemilik pelaporan
            $table->string('kegiatan');
            $table->string('metode');
            $table->string('tempat');
            $table->date('tanggal');
            $table->integer('jumlah_peserta');
            $table->string('status');
            $table->timestamps();

            // Menambahkan foreign key constraint ke kolom 'user_id' yang merujuk ke tabel 'users'
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pelaporans');
    }
}
