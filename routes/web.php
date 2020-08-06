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


Route::get('/home', 'HomeController@home');
Route::get('/register', 'AuthController@register');
Route::get('/welcome', 'AuthController@welcome');
Route::get('/dashboard', 'AdminController@dashboard');
Route::get('/', function () {
    return view('table');
});
Route::get('/data_table', function () {
    return view('data_table');
});