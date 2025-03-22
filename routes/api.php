<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// 3.17
Route::get('/user', [UserController::class, 'show']);