<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('study', function (Blueprint $table) {
        //     $table->id();
        //     $table->integer('urutan');
        //     $table->integer('kelas_id')->unsigned();
        //     $table->foreign('kelas_id')->references('id')->on('kelas')
        //         ->onDelete('cascade')
        //         ->onUpdate('cascade');
        //     $table->integer('materi_id')->unsigned()->nullable();
        //     $table->foreign('materi_id')->references('id')->on('materi')
        //         ->onDelete('cascade')
        //         ->onUpdate('cascade');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('study');
    }
}