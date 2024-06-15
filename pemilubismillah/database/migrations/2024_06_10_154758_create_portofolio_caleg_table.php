<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortofolioCalegTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portofolio_caleg', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('jabatan');
            $table->string('foto')->nullable();
            $table->string('nama_lengkap');
            $table->string('jenis_kelamin');
            $table->string('tempat_tanggal_lahir');
            $table->string('partai');
            $table->text('alamat');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('kode_pos');
            $table->text('visi_misi');
            $table->text('pendidikan');
            $table->text('pengalaman_kerja');
            $table->text('organisasi');
            $table->text('prestasi');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portofolio_caleg');
    }
}
