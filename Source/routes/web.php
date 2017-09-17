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
Route::get('/', 'SiteController@index');
Route::post('/login', 'SiteController@login');
Route::get('/dashboard', 'SiteController@dashboard');
Route::get('/badminton', 'SiteController@badminton');
Route::post('/book', 'SiteController@book');
Route::get('/cancel', 'SiteController@cancel');
Route::get('/logout', 'SiteController@logout');
Route::post('/delete', 'SiteController@delete');
// Route::group(['middleware' => 'auth'], function() {
// 	Route::controller('/', 'AuthController');
// 	Route::get('home', 'SiteController@index');
// 	// Route::get('/', function () {
// 	//     return view('welcome');
// 	// });
// });