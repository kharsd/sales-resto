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
        Schema::create('meja', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('id_lokasi_meja')->unsigned();
            $table->integer('no_meja');
            $table->integer('harga');
            $table->timestamps();
        });

        // Schema::table('meja', function (Blueprint $table) {
        //     $table->foreign('id_lokasi_meja')->references('id')->on('lokasi_meja')->onDelete('cascade')->onUpdate('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meja');
    }
};
