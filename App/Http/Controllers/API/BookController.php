<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    // index(): list semua buku
    public function index()
    {
        $books = Book::all(); // Mengambil semua data dari tabel books
        return response()->json([ // Return dalam bentuk JSON: status + data
            'status' => 'success',
            'data' => $books
        ], 200);  // Menunjukan request berhasil
    } // Endpoint: GET/api/books

    // store(): tambah buku baru
    public function store(Request $request)
    {
        // validasi input user
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:150',           // title wajib, string, max 150 karakter
            'author' => 'required|string|max:100',          // author wajib, string, max 100 karakter
            'year' => 'nullable|integer|max:' . date('Y'),  // year opsional, integer, tidak boleh lebih besar dari tahun sekarang
        ]);
        // kalau validasi gagal maka akan mengembalikan error dengan status HTTP 422 unprocessable Entity
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }
        // kalau lolos validasi data dimasukan ke tabel books
        $book = Book::create($validator->validated());
        // Return JSON dengan status 201 created
        return response()->json([
            'status' => 'success',
            'data' => $book
        ], 201);
    } // Endpoint: POST/api/books

    // show($id): detail buku
    public function show($id)
    {
        // cari buku berdasarkan ID
        $book = Book::find($id);
        // kalau tidak ada -> return 404 not found
        if (!$book) { 
            return response()->json([
                'status' => 'error',
                'message' => 'Book not found'
            ], 404);
        }
        // kalau ada return detail buku
        return response()->json([
            'status' => 'success',
            'data' => $book
        ], 200);
    } // Endpoint: GET/api/books/{id}

    // update($id): ubah data buku
    public function update(Request $request, $id)
    {
        // cek buku berdasarkan ID di database
        $book = Book::find($id);
        // kalau tidak ada -> return 404 not found
        if (!$book) {
            return response()->json([
                'status' => 'error',
                'message' => 'Book not found'
            ], 404);
        }
        // Validasi input untuk update
        $validator = Validator::make($request->all(), [
            'title' => 'sometimes|required|string|max:150',      // sometimes|required hanya divalidasi jika field dikirim
            'author' => 'sometimes|required|string|max:100',
            'year' => 'nullable|integer|max:' . date('Y'),
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }
        // Update data buku berdasarkan input valid
        $book->update($validator->validated());
        // return json dengan status 200 OK
        return response()->json([
            'status' => 'success',
            'data' => $book
        ], 200);
    } // Endpoint: PUT/api/books/{id}

    // destroy($id): hapus buku
    public function destroy($id)
    {
        // cari buku berdasarkan ID
        $book = Book::find($id);
        // kalau tidak ada return 404
        if (!$book) {
            return response()->json([
                'status' => 'error',
                'message' => 'Book not found'
            ], 404);
        }
        // kalau ketemu hapus data
        $book->delete();
        // return status sukses
        return response()->json([
            'status' => 'success',
            'message' => 'Book deleted'
        ], 200);
    } // Endpoint: DELETE/api/books/{id}
}