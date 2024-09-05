<?php

use App\Http\Controllers\ModelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/data', [ModelController::class, 'allData'])->name('all-queries');
