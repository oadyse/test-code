<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_target', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_rek');
            $table->BigInteger('target');
            $table->date('masa_awal');
            $table->date('masa_akhir');
            $table->timestamps();
            $table->foreign('id_rek')->references('id')->on('rekening')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_target');
    }
};
