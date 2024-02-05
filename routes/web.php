<?php

use Illuminate\Support\Facades\Route;

// default laravel routes

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// admin Routes
Route::resource('shop' , 'ShopController');

//broadcast routes
Route::get('message/index', 'MessageController@index');
Route::get('message/send', 'MessageController@send');