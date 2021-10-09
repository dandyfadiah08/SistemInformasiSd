<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Siswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->bigInteger('NIK')->primarykeys();
            $table->integer('id')->unsigned();
            $table->foreign('id')->references('id')->on('kelas')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nis');
            $table->string('nama_siswa');
            $table->string('ttl');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('pendidikan_sebelumnya');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');
            $table->string('alamat_ayah');
            $table->string('alamat_ibu');
            $table->string('nama_wali');
            $table->string('pekerjaan_wali');
            $table->string('alamat_wali');
            $table->string('foto_siswa');
            $table->string('alamat_siswa');
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
                Schema::dropIfExists('siswa');
    }
}
