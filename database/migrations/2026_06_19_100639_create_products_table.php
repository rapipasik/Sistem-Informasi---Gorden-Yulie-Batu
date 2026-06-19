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
        Schema::create('products', function (Blueprint $table) {
           $table->id();
            // Menghubungkan ke tabel categories
            $table->foreignId('category_id')->constrained()->onDelete('cascade');

            $table->string('name'); // Nama Produk (Contoh: Gorden Abu-Abu Elegan)
            $table->string('slug')->unique();
            $table->text('description'); // Deskripsi produk gorden
            $table->decimal('price', 12, 2); // Harga produk (Misal: 310000)
            $table->string('image'); // Nama file/path gambar produk gorden
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
