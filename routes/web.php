<?php

use App\Http\Controllers\AnomaliGarduIndukController;
use App\Http\Controllers\AnomaliProteksiController;
use App\Http\Controllers\AnomaliJaringanController;
use App\Http\Controllers\CetakLaporanController;


use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('dashboard', 'dashboard');
        Route::get('/', 'index');

    });

    Route::resource('anomaligarduinduk', AnomaliGarduIndukController::class);
    Route::resource('anomaliproteksi', AnomaliProteksiController::class);
    Route::resource('anomalijaringan', AnomaliJaringanController::class);
    Route::resource('cetaklaporan', CetakLaporanController::class);
    Route::get('cetaklaporan/export/{format}/{id}', [CetakLaporanController::class, 'export'])->name('cetaklaporan.export');
    



     });


Route::get('/', function () {
    return redirect('login');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');