<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

// HALAMAN UTAMA diarahkan ke daftar event
Route::get('/', [EventController::class, 'index'])->name('events.index');

// Buat Event
Route::get('/events/create', [EventController::class, 'create'])->name('events.create');

// Simpan Event
Route::post('/events', [EventController::class, 'store'])->name('events.store');
