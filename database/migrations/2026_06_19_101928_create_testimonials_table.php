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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama pelanggan yang memberikan ulasan
            $table->string('role_or_city')->nullable(); // Jabatan atau asal kota (Contoh: "Ibu Rumah Tangga, Malang")
            $table->text('review'); // Isi review / testimoni gorden
            $table->integer('rating')->default(5); // Rating bintang (1 sampai 5)
            $table->string('avatar')->nullable(); // Foto profil pelanggan (opsional)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
