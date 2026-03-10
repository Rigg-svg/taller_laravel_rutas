<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourtController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ReportController;

Route::get('/', function () {
    return view('home');
})->name('inicio');

Route::get('canchas', [CourtController::class , 'index'])->name('canchas.index');
Route::get('canchas/nueva', [CourtController::class , 'create'])->name('canchas.create');
Route::get('canchas/{id}', [CourtController::class , 'show'])->name('canchas.show');

Route::get('reservas', [BookingController::class , 'index'])->name('reservas.index');
Route::get('reservas/crear', [BookingController::class , 'create'])->name('reservas.create');
Route::get('reservas/{id}', [BookingController::class , 'show'])->name('reservas.show');

Route::get('reportes', [ReportController::class , 'monthlyReport'])->name('reportes.monthly');