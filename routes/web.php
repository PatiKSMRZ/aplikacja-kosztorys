<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuildingController;

Route::get('/', function () {
    return view('welcome');
});
//Route::post('/building', [BuildingController::class, 'building'])->name('buidling');
Route::get('/building', function () {
    return view('building');
});
Route::get('/renovation', function () {
    return view('renovation');
});

Route::get('/account', function () {
    return view('account');
});

