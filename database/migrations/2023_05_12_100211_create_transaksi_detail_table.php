<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksi_detail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transaksi_id');
            $table->string('jenis');
            $table->timestamp('tanggal');
            $table->string('wallet_tujuan')->nullable();
            $table->string('no_tujuan');
            $table->string('pembayaran');
            $table->integer('jumlah_harga');
            $table->string('keterangan')->nullable();
            $table->timestamps();

        });
        Schema::table('transaksi_detail', function($table) {
            $table->foreign('transaksi_id')->references('id')->on('transaksi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_detail');
    }
};
