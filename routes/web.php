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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/accounts/signup', 'frontend\Home@create');

Route::get('/accounts/individual', 'frontend\Home@individual_route');
Route::get('/accounts/serviceSignup', function () {
    return view('accounts.serviceSignup');
});
Route::get('/accounts/login', 'frontend\Home@login_route');



Route::post('create_User', 'frontend\Home@store');
Route::post('add_worker', 'frontend\Home@create_worker');
Route::post('login_User', 'frontend\Home@Login');
Route::get('logout', 'frontend\Home@Logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/accounts/frenchise', function () {
    return view('accounts.frenchise');
});
