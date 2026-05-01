<?php

use App\Http\Controllers\ChirpController;

Route::get('/chirps', [ChirpController::class, 'index']);