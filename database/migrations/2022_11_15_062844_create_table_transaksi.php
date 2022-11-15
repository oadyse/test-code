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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_rek');
            $table->unsignedBigInteger('id_pajak');
            $table->enum('via_bayar', ['Bank', 'Bendahara']);
            $table->date('tgl_setor');
            $table->timestamps();
            $table->foreign('id_rek')->references('id')->on('rekening')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_pajak')->references('id')->on('pajak')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
};
