<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AbsensiController;
use App\Http\Controllers\Admin\BengkelController;
use App\Http\Controllers\Admin\GajiController;
use App\Http\Controllers\Admin\KaryawanController;
use App\Http\Controllers\Admin\KasirController;

use App\Http\Controllers\Management\ReportController;
use App\Http\Controllers\Management\BroadcastController;

use App\Http\Controllers\Kasir\AbsensiController as KasirAbsensiController;

Route::get('/', function () {
    return view('login');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('absensi', AbsensiController::class);
    Route::resource('bengkel', BengkelController::class);
    Route::resource('gaji', GajiController::class);
    Route::resource('karyawan', KaryawanController::class);
    Route::resource('kasir', KasirController::class);
});

Route::group(['prefix' => 'management', 'as' => 'management.'], function () {
    Route::resource('report', ReportController::class);
    Route::resource('broadcast', BroadcastController::class);
});

Route::group(['prefix' => 'kasir', 'as' => 'kasir.'], function () {
    Route::resource('absensi', KasirAbsensiController::class);
});

