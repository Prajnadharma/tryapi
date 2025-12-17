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

    Schema::create('ramuan_cara', function (Blueprint $table) {
        $table->id();
        $table->foreignId('ramuan_id')->constrained('ramuans')->onDelete('cascade');
        $table->foreignId('cara_mengolah_id')->constrained('cara_mengolahs')->onDelete('cascade');
        $table->integer('urutan')->nullable();
        $table->timestamps();
    });

    Schema::enableForeignKeyConstraints();
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ramuan_caras');
    }
};
