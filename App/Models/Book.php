<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model; // base class
use Illuminate\Database\Eloquent\Factories\HasFactory; // untuk menghubungkan model dengan factory

// kelas Book
class Book extends Model
{
    use HasFactory; //Trait bawaan supaya model ini bisa dipakai difactory

    // Daftar kolom yang boleh di-mass assign(diisi sekaligus)
    protected $fillable = [
        'title',
        'author',
        'year',
    ];
}
