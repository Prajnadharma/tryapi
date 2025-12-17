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
    Schema::create('tumbuhans', function (Blueprint $table) {
        $table->id();
        $table->string('nama_umum');
        $table->string('nama_latin')->nullable();
        $table->string('bagian_umum')->nullable();
        $table->text('deskripsi')->nullable();
        $table->timestamps();
    });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tumbuhans');
    }
};
