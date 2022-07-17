<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_Home;
use App\Http\Controllers\C_Dosen;
use App\Http\Controllers\C_Mahasiswa;
use App\Http\Controllers\C_User;
use App\Http\Controllers\C_Register;
use App\Http\Controllers\C_Login;
use App\Http\Controllers\C_Invoice;
use App\Http\Controllers\ChartJsController;
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

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register', [C_Register::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth', 'level:1'])->group(function () {

    //Route::get('/home', [C_Home::class,'index']);
    Route::get('/about', [C_Home::class, 'about']);
    Route::get('/about2/{id}', [C_Home::class, 'about2']);

    Route::get('/dosen', [C_Dosen::class, 'index'])->name('dosen');
    Route::get('/dosen/detail/{id_dosen}', [C_Dosen::class, 'detail']);
    Route::get('/dosen/add', [C_Dosen::class, 'add']);
    Route::post('/dosen/insert', [C_Dosen::class, 'insert']);
    Route::get('/dosen/edit/{id_dosen}', [C_Dosen::class, 'edit']);
    Route::post('/dosen/update/{id_dosen}', [C_Dosen::class, 'update']);
    Route::get('/dosen/delete/{id_dosen}', [C_Dosen::class, 'delete']);
    Route::get('/dosen/print', [C_Dosen::class, 'print']);

    Route::get('/mahasiswa', [C_Mahasiswa::class, 'index']);

    Route::get('/user', [C_User::class, 'index']);


    Route::get('/invoice', [C_Invoice::class, 'index']);
    Route::get('/invoiceprint', [C_Invoice::class, 'print']);


    Route::get('/chartjs', [ChartJsController::class, 'index'])->name('chartjs.index');
});

Route::middleware(['auth', 'level:2'])->group(function () {
    Route::get('/user2', [C_User::class, 'index']);
});

Route::middleware(['auth', 'level:3'])->group(function () {
    Route::get('/mahasiswa3', [C_Mahasiswa::class, 'index']);
});

Route::middleware(['auth', 'level:4'])->group(function () {
    Route::get('/dosen4', [C_Dosen::class, 'index'])->name('dosen');
    Route::get('/dosen4/detail/{id_dosen}', [C_Dosen::class, 'detail']);
    Route::get('/dosen4/print', [C_Dosen::class, 'print']);
});
