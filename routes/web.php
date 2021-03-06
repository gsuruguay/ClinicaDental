<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('nosotros', 'about')->name('about');
Route::view('planes', 'plans')->name('plans');
Route::get('contacto', [ContactController::class, 'index'])->name('contact.index');
Route::post('contacto', [ContactController::class, 'send'])->name('contact.send');
