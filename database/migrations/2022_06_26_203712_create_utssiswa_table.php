<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtssiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utssiswa', function (Blueprint $table) {
            $table->increments('id')->primarykeys();
            $table->integer('NUPTK')->unsigned();
            $table->foreign('NUPTK')->references('id')->on('guru')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('mapel_id')->unsigned();
            $table->foreign('mapel_id')->references('id')->on('mapel')->onDelete('cascade')->onUpdate('cascade');
            $table->string('soal_uts');
            $table->string('keterangan_tambahan');
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
        Schema::dropIfExists('utssiswa');
    }
}
