<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataBungaController;
use App\Http\Controllers\StokBungaController;
use App\Http\Controllers\UserController;
use App\Models\dataBunga;

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
    return view('index');
});

Route::prefix('data')->name('data.')->group(function () {
    Route::get('/', [DataBungaController::class, 'index'])->name('home');
    Route::get('/pesan', [DataBungaController::class, 'create'])->name('pesan');
    Route::get('/bunga', [DataBungaController::class, 'store'])->name('pesan.bunga');


});

//halaman user
Route::prefix('user')->name('user.')->group(function () {
    Route::get('/user', [UserController::class, 'index'])->name('user');  // Rute untuk view ini
    Route::get('/tambah', [UserController::class, 'create'])->name('tambah');
    Route::post('/tambah', [UserController::class, 'store'])->name('tambah.store');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::patch('/edit/{id}', [UserController::class, 'update'])->name('edit.update');
    Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('delete');
});
