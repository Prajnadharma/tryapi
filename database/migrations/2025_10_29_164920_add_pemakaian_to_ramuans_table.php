<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('ramuans', function (Blueprint $table) {
            $table->string('pemakaian')->nullable()->after('deskripsi');
        });
    }

    public function down(): void
    {
        Schema::table('ramuans', function (Blueprint $table) {
            $table->dropColumn('pemakaian');
        });
    }
};
