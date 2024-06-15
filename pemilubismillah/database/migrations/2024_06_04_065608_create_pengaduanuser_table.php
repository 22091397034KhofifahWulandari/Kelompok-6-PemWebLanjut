<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaduanuserTable extends Migration
{
    public function up()
    {
        Schema::create('pengaduanuser', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('judul');
            $table->text('isi_laporan');
            $table->string('foto')->nullable();
            $table->date('tanggal_pengaduan');
            $table->string('status')->default('pending');
            $table->text('response')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengaduanuser');
    }
}
