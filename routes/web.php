<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KostController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/terms', [PageController::class, 'terms'])->name('terms');
Route::get('/help', [PageController::class, 'help'])->name('help');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/register/user', [RegisterController::class, 'showUserForm'])->name('register.user');
Route::get('/register/owner', [RegisterController::class, 'showOwnerForm'])->name('register.owner');
Route::get('/kost/{id}', [KostController::class, 'detail'])->name('kost.detail');