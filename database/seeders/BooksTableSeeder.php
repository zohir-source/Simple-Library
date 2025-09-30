<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BooksTableSeeder extends Seeder
{
    // Method utama 
    public function run(): void
    {
        $now = Carbon::now(); // menyimpan waktu saat ini kedalam variabel $now
        // Query builder untuk insert data ke table books
        DB::table('books')->insert([
            // baris data 
            [
                'title' => 'Laskar Pelangi',             // judul buku
                'author' => 'Andrea Hirata',             // Penulis
                'year' => 2005,                          // Tahun terbit
                'created_at' => $now,                    // Otomatis mengikuti timestamps sekarang
                'updated_at' => $now,                    // Otomatis mengikuti timestamps sekarang 
            ],
            [
                'title' => 'Bumi Manusia',
                'author' => 'Pramoedya Ananta Toer',
                'year' => 1980,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Sang Pemimpi',
                'author' => 'Andrea Hirata',
                'year' => 2006,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Atomic Habits',
                'author' => 'James Clear',
                'year' => 2018,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Clean Code',
                'author' => 'Robert C. Martin',
                'year' => 2008,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}