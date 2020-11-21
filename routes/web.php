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
Route::get('/colection/create', 'MyColectionController@create')->name('colection.create');
Route::post('/colection/store', 'MyColectionController@store')->name('colection.store');


Route::get('/colection/show/{article}', 'MyColectionController@show')->name('colection.show');
Route::get('/colection/edit/{article}', 'MyColectionController@edit')->name('colection.edit');
Route::post('/colection/update/{article}', 'MyColectionController@update')->name('colection.update');
Route::get('/colection/delete/{article}', 'MyColectionController@delete')->name('colection.delete');
