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
Route::group(['middleware' => ['auth','checkRole:admin']],function(){
    Route::get('/admin/index', 'AdminsController@index')->name('dashboard');
    Route::get('/admin/reservations', 'reservationsController@index');
    // Route::resource('admin', 'AdminsController');
    
    // Route::get('admin/cars', 'CarsController@index')->name('cars');
    // Route::get('admin/cars/create', 'CarsController@create');
    // Route::post('/admin/cars', 'CarsController@store');
    // Route::delete('/admin/cars/{car}', 'CarsController@destroy');
    // Route::get('admin/cars/{car}/edit', 'CarsController@edit');
    
    Route::resource('admin/cars', 'CarsController');
 });
 
/*
|--------------------------------------------------------------------------
| Routes Users
|--------------------------------------------------------------------------
|
*/

Route::group(['middleware' => ['auth']],function(){
    Route::get('booking', 'PagesController@booking')->name('booking');

 });

 Route::group(['middleware' => ['auth','checkRole:user']],function(){

 });

/*
|--------------------------------------------------------------------------
| Routes Pages
|--------------------------------------------------------------------------
|
*/
Route::get('index', 'PagesController@index')->name('home');
Route::get('car_list', 'PagesController@car_list')->name('car_list');
Route::get('abouts', 'PagesController@abouts')->name('abouts');


//Route::get('/home', 'HomeController@index')->name('home');

/*
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/