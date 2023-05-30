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
        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_order')->unsigned();
            $table->string('nama');
            $table->string('email');
            $table->string('role');
            $table->timestamps();
        });

        Schema::table('admin', function (Blueprint $table) {
            $table->foreign('id_order')->references('id')->on('order')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};
