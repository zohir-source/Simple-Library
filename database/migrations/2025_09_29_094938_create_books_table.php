<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Anonymous class menggantikan penamaan class manual
return new class extends Migration {
    public function up(): void
    {
        // Tabel books
        Schema::create('books', function (Blueprint $table) {
            $table->id();                                       // Primary key
            $table->string('title', 150);       // Judul buku, panjang karakter 150
            $table->string('author', 100);      // Nama penulis, panjang karakter 100 
            $table->integer('year')->nullable();        // Tahun terbit
            $table->timestamps();                               // creates_at & update_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};