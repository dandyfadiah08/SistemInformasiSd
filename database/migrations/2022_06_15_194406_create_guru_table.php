<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->bigInteger('NUPTK')->primarykeys();
            $table->string('nama_guru', 100);
            $table->string('jenis_kelamin');
            $table->string('ttl', 100);
            $table->bigInteger('NIP')->nullable();
            $table->string('pendidikan_sebelumnya');
            $table->string('status_kepegawaian');
            $table->string('jenis_ptk');
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
        Schema::dropIfExists('guru');
    }
}
