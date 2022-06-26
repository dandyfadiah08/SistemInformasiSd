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
            $table->increments('id')->primarykeys();
            $table->bigInteger('NUPTK');
            $table->string('nama_guru', 100);
            $table->string('jenis_kelamin');
            $table->string('ttl', 100);
            $table->bigInteger('NIP')->nullable();
            $table->string('status_kepegawaian');
            $table->string('jenis_ptk');
            $table->bigInteger('total_JJM');
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
