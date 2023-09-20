<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CampusController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/campus', [CampusController::class, 'index'])->name('campus');
