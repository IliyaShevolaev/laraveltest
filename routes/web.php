<?php

use App\Http\Middleware\PageVisitorsCount;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

//3.8
Route::get('{userName}/city', function($userName) {
    $users = [ 
        'user1' => 'city1', 
        'user2' => 'city2', 
        'user3' => 'city3', 
        'user4' => 'city4', 
        'user5' => 'city5'
    ];

    if (array_key_exists($userName, $users)) {
        return $userName . '-' . $users[$userName];
    } else {
        return $userName . ' не найден';
    }
});

//3.9
Route::get('/visitors', function() {
    return Session::get('visitorsCount', 0);
});