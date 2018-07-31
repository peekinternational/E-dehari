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
    return view('home');
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
Route::get('/accounts/frenchise', function () {
    return view('accounts.frenchise');
});
Route::get('/accounts/workMarket', function () {
    return view('accounts.workMarket');
});
Route::get('/accounts/hireService', function () {
    return view('accounts.hireService');
});
Route::get('/accounts/company', function () {
    return view('accounts.company');
});