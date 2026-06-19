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
        Schema::create('portfolios', function (Blueprint $table) {
           $table->id();
            $table->string('title'); // Judul proyek (Contoh: "Pemasangan Gorden Rumah Mewah di Batu")
            $table->string('slug')->unique();
            $table->text('description')->nullable(); // Detail singkat pengerjaan proyeknya
            $table->string('image'); // Foto hasil pengerjaan/pemasangan gorden
            $table->date('project_date')->nullable(); // Waktu pengerjaan proyek selesai (opsional)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
