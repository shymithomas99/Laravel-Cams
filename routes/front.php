<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Front Routes
|--------------------------------------------------------------------------
|
| Here is where you can register front routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('/about', 'pages.about')->name('about');
Route::view('/services', 'pages.services')->name('services');
Route::view('/portfolio', 'pages.portfolio')->name('portfolio');
Route::view('/contact', 'pages.contact')->name('contact');

Route::get('/portfolios', [HomeController::class, 'portfolio'])
    ->name('pages.portfolio');

Route::get('/portfolio/{id}', [HomeController::class, 'show'])
    ->whereNumber('id')
    ->name('portfolio.show');
Route::view('/about', 'pages.about')->name('about');
Route::view('/services', 'pages.services')->name('services');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
