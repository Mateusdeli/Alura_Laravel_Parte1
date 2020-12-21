<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('series')->group(function() {
    Route::get('/', "SeriesController@index")->name("series.index");
    Route::get('/find/{name}', "SeriesController@show")->name("series.show");

    Route::get('/create', "SeriesController@create")->name("series.create.form");
    Route::post('/create', "SeriesController@store")->name("series.create");

    Route::delete('/{id}', "SeriesController@destroy")->name("series.destroy");

});


