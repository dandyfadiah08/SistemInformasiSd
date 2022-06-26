<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMapeltugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapeltugas', function (Blueprint $table) {
            $table->increments('id')->primarykeys();
            $table->string('keterangan_mapel');
            $table->integer('NUPTK')->unsigned();
            $table->foreign('NUPTK')->references('id')->on('guru')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('mapel_id')->unsigned();
            $table->foreign('mapel_id')->references('id')->on('mapel')->onDelete('cascade')->onUpdate('cascade');
            $table->string('waktu_mulai_absen_siswa');
            $table->string('waktu_akhir_absen_siswa');
            $table->string('gambar_materi')->nullable();
            $table->string('video_materi')->nullable();
            $table->string('keterangan_materi');
            $table->string('gambar_tugas')->nullable();
            $table->string('video_tugas')->nullable();
            $table->string('keterangan_tugas');
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
        Schema::dropIfExists('mapeltugas');
    }
}
