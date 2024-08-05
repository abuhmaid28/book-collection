<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});


// Route::prefix('books')->name('books.')->group(function () {
//     Route::get('/', [BookController::class, 'index'])->name('index');
//     Route::get('/create', [BookController::class, 'create'])->name('create');
//     Route::get('/{id}', [BookController::class, 'show'])->name('show');
//     Route::get('/{id}/edit', [BookController::class, 'edit'])->name('edit');
//     Route::get('/{id}/destroy', [BookController::class, 'destroy'])->name('destroy');
// });


Route::resource('books', BookController::class);
