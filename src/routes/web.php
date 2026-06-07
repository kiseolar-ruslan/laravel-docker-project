<?php

use App\Http\Controllers\Registration\RegisterContoller;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::get('/test', TestController::class);

Route::get('/register', [RegisterContoller::class, 'index'])->name('register');
Route::post('/register', [RegisterContoller::class, 'store'])->name('register.store');

Route::get('/login', [RegisterContoller::class, 'index'])->name('login');
Route::post('/login', [RegisterContoller::class, 'store'])->name('login.store');
