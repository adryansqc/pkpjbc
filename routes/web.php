<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('fe.pages.home');
// });

Route::get('/', [FrontendController::class, 'index'])->name('frontend.home');
Route::get('/tentang', [FrontendController::class, 'tentang'])->name('frontend.tentang');
Route::get('/unggulan', [FrontendController::class, 'unggulan'])->name('frontend.unggulan');
Route::get('/galeri', [FrontendController::class, 'galeri'])->name('frontend.galeri');
Route::get('/download-price-list', [FrontendController::class, 'downloadPriceList'])->name('frontend.download-price-list');
Route::get('/berita', [FrontendController::class, 'berita'])->name('frontend.berita');
Route::get('/berita/{slug}', [FrontendController::class, 'beritaShow'])->name('frontend.berita.show');
