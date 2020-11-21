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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/colection', 'MycolectionController@index')->name('my_colection.index');
Route::get('/colection/create', 'MyColectionController@create')->name('colection.create')->middleware('auth');
Route::post('/colection/store', 'MyColectionController@store')->name('colection.store')->middleware('auth');


Route::get('/colection/show/{article}', 'MyColectionController@show')->name('colection.show')->middleware('auth');
Route::get('/colection/edit/{article}', 'MyColectionController@edit')->name('colection.edit')->middleware('auth');
Route::post('/colection/update/{article}', 'MyColectionController@update')->name('colection.update')->middleware('auth');
Route::get('/colection/delete/{article}', 'MyColectionController@delete')->name('colection.delete')->middleware('auth');
