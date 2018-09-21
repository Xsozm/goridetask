<?php

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
Route::get('/cars','CarController@index')->name('cars');
Route::get('/agencies','AgencyController@index')->name('agencies');
Route::get('/company','CompanyController@index')->name('company');
Route::get('/agency/{id}','AgencyController@show');
Route::get('car/{id}','CarController@show');
Route::get('/MyCars','CarController@mine')->name('mine');
Route::post('/rent','CarController@rent')->name('rent');
Route::post('/unrent','CarController@unrent')->name('unrent');
