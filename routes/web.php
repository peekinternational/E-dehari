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
Route::get('/accounts/signup', function () {
    return view('accounts.signup');
});

Route::get('/accounts/individual', function () {
    return view('accounts.individual');
});
Route::get('/accounts/serviceSignup', function () {
    return view('accounts.serviceSignup');
});
Route::get('/accounts/login', function () {
    return view('accounts.login');
});


Route::post('create_User', 'frontend\Home@store');
Route::post('login_User', 'frontend\Home@Login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
