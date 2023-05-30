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
        Schema::create('order_menu', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_menu')->unsigned();
            $table->integer('jumlah');
            $table->timestamps();
        });
    
        Schema::table('order_menu', function (Blueprint $table) {
            $table->foreign('id_menu')->references('id')->on('menu')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_menu');
    }
};
