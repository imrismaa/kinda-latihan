<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BukuController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Risma",
        "email" => "risma@gmail.com"
    ]);
});

//without variable
Route::get('/dor', [PostController::class, 'tryController']
);

// with variables
Route::get('/seconddor', [PostController::class, 'showAbout']
);

// model
Route::get('/perumahan', [PostController::class, 'tryModel']
);

// model buku
Route::get('/buku', [BukuController::class, 'tryModel']
);

// crud
Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');
Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');
Route::post('/buku/update/{id}', [BukuController::class, 'update'])->name('buku.update');
Route::post('/buku/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');
Route::get('/buku/edit/{id}', [BukuController::class, 'edit'])->name('buku.edit');

