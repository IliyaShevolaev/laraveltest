<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//3.6
Route::get('/user/{id?}', function ($id = 0) {
    return 'user id:' . $id;
})->where('id', '[0-9]+');

//3.7
Route::get('/{year}/{month}/{day}', function ($year, $month, $day) {
    $date = $year . '-' . $month . '-' . $day;

    return date('l', strtotime($date));
})->where([
    'year' => '[0-9]+',
    'month' => '[0-9]+',
    'day' => '[0-9]+',
]);
