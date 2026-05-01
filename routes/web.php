<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ChirpController;

Route::get('/chirps', [ChirpController::class, 'index']);
Route::get('/', function () {
    return redirect('/chirps');
});