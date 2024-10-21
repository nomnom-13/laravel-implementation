<?php

use App\Http\Controllers\DetailController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'details.main');

Route::get('/', [DetailController::class, 'myDetails']);
