<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

// PublicController che gestisce le navigazioni
Route::get('/', [PublicController::class, 'home'])->name('home');

// ArticleController per la gestione degli articoli
Route::get('/articles/index', [ArticleController::class, 'index'])->name('articles.index');

Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create')->middleware('auth');
Route::post('/articles/create/success', [ArticleController::class, 'store'])->name('articles.store')->middleware('auth');