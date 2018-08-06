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
Route::group(['prefix' => '/accounts'], function ()
{


Route::get('/signup', 'frontend\Home@create');
Route::get('/individual', 'frontend\Individual@individual_route');
Route::get('/franchise', 'frontend\Franchise@franchise_route');
Route::get('/company', 'frontend\Company@company_route');
Route::get('/serviceSignup', function () {
    return view('accounts.serviceSignup');
});
Route::get('/login', 'frontend\Home@login_route');
Route::get('/workMarket', function () {
    return view('accounts.workMarket');
});
Route::get('/hireService', function () {
    return view('accounts.hireService');
});
});


Route::post('create_User', 'frontend\Home@store');
Route::post('login_User', 'frontend\Home@Login');
Route::get('logout', 'fornt\Home@Logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/accounts/workMarket', function () {
    return view('accounts.workMarket');
});
Route::get('/accounts/hireService', function () {
    return view('accounts.hireService');
});
Route::get('/accounts/company', function () {
    return view('accounts.company');
});
Route::get('/accounts/individualDashboard', function () {
    return view('accounts.individualDashboard');
});
Route::get('/accounts/individualProfile', function () {
    return view('accounts.individualProfile');
});
Route::get('/accounts/userDashboard', function () {
    return view('accounts.userDashboard');
});
Route::get('/accounts/workerDashboard', function () {
    return view('accounts.workerDashboard');
});




Route::post('personal_info', 'frontend\Franchise@franchise_info');
Route::post('add_worker', 'frontend\Franchise@create_worker');
