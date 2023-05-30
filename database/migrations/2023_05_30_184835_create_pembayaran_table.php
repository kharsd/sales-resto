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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_metode_pembayaran')->unsigned();
            $table->string('status_pembayaran');
            $table->integer('total_pembayaran');
            $table->dateTime('tanggal_pembayaran');
            $table->timestamps();
        });

        Schema::table('pembayaran', function (Blueprint $table) {
            $table->foreign('id_metode_pembayaran')->references('id')->on('metode_pembayaran')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
