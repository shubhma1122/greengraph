<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\homeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/home', [homeController::class, 'home'])->name('main');
Route::get('/about', [aboutController::class, 'index'])->name('about');
Route::get('/service', [serviceController::class, 'index'])->name('service');
Route::get('/contact', [contactController::class, 'index'])->name('contact');