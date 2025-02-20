<?php

use App\Http\Controllers\guest\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index']);
