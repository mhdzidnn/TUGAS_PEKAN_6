<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListbarangController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landingpage');
});

Route::get('home', [HomeController::class, 'index'])->name('home');

Route::resource('lists', ListbarangController::class);

Route::get('/barang/{list}/edit', [ListbarangController::class, 'edit'])->name('barang.edit');
Route::put('/barang/{list}', [ListbarangController::class, 'update'])->name('barang.update');
