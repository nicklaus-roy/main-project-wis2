<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/sign-up', 'SignUpController@index');
Route::get('/quotes', 'QuotesController@index');

Route::get('/quotes/author/{author}', 'QuotesController@filterByAuthor');
Route::get('/quotes/body/{body}', 'QuotesController@filterByBody');


Route::get('/products', 'ProductsController@index');
Route::get('/templates', 'TemplatesController@index');
Route::get('/templates/another-page', 'TemplatesController@anotherPage');
Route::get('/templates/extra-page', 'TemplatesController@extraPage');

Route::get('/events', 'EventsController@index');
Route::get('/events/schedules', 'EventSchedulesController@index');
