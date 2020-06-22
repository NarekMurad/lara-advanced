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

Route::namespace('Project')->group(function (){
    Route::get('/', 'MainController@index')->name('index');
});

Route::prefix('dashboard')->name('dashboard.')->namespace('Dashboard')->group(function (){
    Route::get('/', 'MainController@index')->name('index');
});
