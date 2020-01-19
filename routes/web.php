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

/*
|--------------------------------------------------------------------------
| Routes Logins
|--------------------------------------------------------------------------
|
*/
Route::get('signin', 'LoginController@signin')->name('signin');
Route::get('signup', 'LoginController@signup')->name('signup');

/*
|--------------------------------------------------------------------------
| Routes Admins
|--------------------------------------------------------------------------
|
*/
Route::get('admin/index', 'AdminController@index')->name('dashboard');
Route::get('admin/inventory', 'CarController@index')->name('inventory');

/*
|--------------------------------------------------------------------------
| Routes Pages
|--------------------------------------------------------------------------
|
*/
Route::get('index', 'PagesController@index')->name('home');
Route::get('car_list', 'PagesController@car_list')->name('car_list');
Route::get('abouts', 'PagesController@abouts')->name('abouts');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
