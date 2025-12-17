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
    Schema::disableForeignKeyConstraints();

    Schema::create('bahan_tumbuhan', function (Blueprint $table) {
        $table->id();
        $table->foreignId('ramuan_id')->constrained('ramuans')->onDelete('cascade');
        $table->foreignId('tumbuhan_id')->constrained('tumbuhans')->onDelete('cascade');
        $table->string('bagian_digunakan')->nullable();
        $table->string('jumlah')->nullable();
        $table->timestamps();
    });

    Schema::enableForeignKeyConstraints();
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bahan_tumbuhans');
    }
};
