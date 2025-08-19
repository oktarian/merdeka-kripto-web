
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Rute untuk menampilkan halaman utama
Route::get('/', [PageController::class, 'index'])->name('home');

// Rute untuk menangani pengiriman form kontak
Route::post('/contact', [PageController::class, 'handleContact'])->name('contact.submit');