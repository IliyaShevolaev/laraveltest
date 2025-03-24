<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LinksController;
use App\Http\Middleware\PageVisitorsCount;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\UserTableController;
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
Route::get('{userName}/city', function ($userName) {
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
Route::get('/visitors', function () {
    return Session::get('visitorsCount', 0);
});

//3.10
Route::group(['prefix' => '/pages'], function () {
    Route::get('/show/{id}', [PageController::class, 'showOne']);
    Route::get('/all', [PageController::class, 'showAll']);

    //3.11
    Route::get('/showView', [PageController::class, 'showView']);

    //3.12
    Route::get('/showViewParams/{name}/{surname}', [PageController::class, 'showViewParams']);
});

//3.14 
Route::group(['prefix' => '/content'], function () {
    Route::get('/first', [ContentController::class, 'firstPage'])->name('content.first');
    Route::get('/second', [ContentController::class, 'secondPage'])->name('content.second');
    Route::get('/third', [ContentController::class, 'thirdPage'])->name('content.third');
});

//3.15
Route::get('/links', [LinksController::class, 'index']);

//3.16
Route::get('/userstable', [UserTableController::class, 'index']);
