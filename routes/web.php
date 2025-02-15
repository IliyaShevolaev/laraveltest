<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{id?}', function($id = 0) {
    return 'user id:' . $id;
})->where('id', '[0-9]+');
