<?php

use App\Http\Controllers\TrainController;
use App\Models\Train;
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

Route::get('/', [TrainController::class, 'home'])->name('home');
Route::get('/trains', [TrainController::class, 'showAll'])->name('showAll');
