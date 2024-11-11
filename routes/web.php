<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('headerpage');
// });

Route::get('/',[FrontController::class,'header'])->name('/');

Route::get('/1horsedetails',[FrontController::class,'firsthorsedetails'])->name('1horsedetails');

Route::get('/2horsedetails',[FrontController::class,'secondhorsedetails'])->name('2horsedetails');
