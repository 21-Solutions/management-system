<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DashboardController;

Route::get('/',                     [PagesController::class,'welcome'])->name('welcome');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('dashboard');


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

//Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('auth');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/upload', 'DashboardController@uploadForm')->name('upload.form');
Route::post('/dashboard/upload', 'DashboardController@upload')->name('upload.submit');

