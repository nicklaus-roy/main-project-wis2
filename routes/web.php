<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', 'AuthController@index')->name('login');
Route::post('/login', 'AuthController@login');
Route::get('/register', 'AuthController@register');
Route::post('/register', 'AuthController@store');

Route::middleware(['auth'])->group(function() {
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/logout', 'AuthController@logout');
});
