<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\BookController;

// ini akan otomatis akan mengasilkan 5 route (index,store,show,update,destroy)
Route::apiResource('books',BookController::class);

/* boleh dengan menggunakan cara ini
Route::prefix('books')->group(function () {
    Route::get('/', [BookController::class, 'index']);           // GET /api/books
    Route::post('/', [BookController::class, 'store']);          // POST /api/books
    Route::get('/{id}', [BookController::class, 'show']);        // GET /api/books/{id}
    Route::put('/{id}', [BookController::class, 'update']);      // PUT /api/books/{id}
    Route::delete('/{id}', [BookController::class, 'destroy']);  // DELETE /api/books/{id}
});
*/

