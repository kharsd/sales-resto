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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_order_menu')->unsigned();
            $table->bigInteger('id_meja')->unsigned();
            $table->bigInteger('id_reservasi')->unsigned();
            $table->bigInteger('id_pesan_langsung')->unsigned();
            $table->bigInteger('id_pembayaran')->unsigned();
            $table->string('nama_pelanggan');
            $table->integer('no_struk');
            $table->integer('harga_meja');
            $table->timestamps();
        });

        Schema::table('order', function (Blueprint $table) {
            $table->foreign('id_order_menu')->references('id')->on('order_menu')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_meja')->references('id')->on('meja')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_reservasi')->references('id')->on('reservasi')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_pesan_langsung')->references('id')->on('pesan_langsung')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_pembayaran')->references('id')->on('pembayaran')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
