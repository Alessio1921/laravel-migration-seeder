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

Route::get('/','HomepageController@index')->name("homepage");
Route::get('/trains','TrainsController@index')->name("trains");
Route::get('/trains/details/{id}','TrainsController@show')->name("trains.show");
Route::get('/trains/today','TrainsController@today')->name("today");