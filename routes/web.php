<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

// PublicController che gestisce le navigazioni
Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/articles', [PublicController::class, 'articles'])->name('articles');
Route::get('/articles/create', [PublicController::class, 'create'])->name('articles.create')->middleware('auth');