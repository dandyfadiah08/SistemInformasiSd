<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsenguruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absenguru', function (Blueprint $table) {
            $table->id();
            $table->integer('NUPTK')->unsigned();
            $table->foreign('NUPTK')->references('id')->on('guru')->onDelete('cascade')->onUpdate('cascade');
            $table->string('waktu');
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
        Schema::dropIfExists('absenguru');
    }
}
