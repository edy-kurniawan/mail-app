<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AbsensiController;
use App\Http\Controllers\Admin\BengkelController;
use App\Http\Controllers\Admin\GajiController;
use App\Http\Controllers\Admin\KaryawanController;

use App\Http\Controllers\Management\ReportController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('absensi', AbsensiController::class);
    Route::resource('bengkel', BengkelController::class);
    Route::resource('gaji', GajiController::class);
    Route::resource('karyawan', KaryawanController::class);
});

Route::group(['prefix' => 'management', 'as' => 'management.'], function () {
    Route::resource('report', ReportController::class);
});

