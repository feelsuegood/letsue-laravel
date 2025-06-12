<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardsController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('boards', BoardsController::class);