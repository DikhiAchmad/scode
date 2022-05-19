<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('materi_id');
            $table->foreign('materi_id')->references('id')->on('materi')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('pertanyaan', 100);
            $table->string('pilihan_1', 50);
            $table->string('pilihan_2', 50);
            $table->string('pilihan_3', 50);
            $table->string('pilihan_4', 50);
            $table->string('jawaban_benar', 50);
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
        Schema::dropIfExists('quiz');
    }
}