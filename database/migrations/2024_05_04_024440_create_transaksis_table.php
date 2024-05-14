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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('barangdua_id');
            $table->unsignedBigInteger('pembeli_id');
            $table->integer('jumlah');
            $table->date('tanggal');
            $table->timestamps();

            $table->foreign('barangdua_id')->references('id')->on('barangduas')->onDelete('cascade');
            $table->foreign('pembeli_id')->references('id')->on('pembelis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
};
