<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserpemiluTable extends Migration
{
    public function up()
    {
        Schema::create('userpemilu', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->unique();
            $table->string('username')->unique();
            $table->string('nama_lengkap');
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->string('password');
            $table->string('foto_ktp');
            $table->string('profile_picture')->nullable(); // tambahkan kolom ini
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('userpemilu');
    }
}

