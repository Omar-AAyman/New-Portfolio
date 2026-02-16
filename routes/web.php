<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blog/{slug}', [PostController::class, 'show'])->name('blog.show');
Route::post('/send-message', [HomeController::class, 'sendMessage'])->name('send.message')->middleware('throttle:3,1');

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ar'])) {
        session()->put('locale', $locale);
    }

    $section = request('section');
    $redirect = redirect()->back();

    return $section ? $redirect->withFragment($section) : $redirect;
})->name('lang.switch');
