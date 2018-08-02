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
Route::get('logout', 'frontend\Home@Logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





Route::post('Ind_personal_info', 'frontend\Individual@individual_info');
Route::post('Ind_professional_info', 'frontend\Individual@individual_Professional_info');
Route::post('Ind_location_info', 'frontend\Individual@individual_location_info');
Route::post('personal_info', 'frontend\Franchise@franchise_info');
Route::post('personal_info', 'frontend\Company@company_info');
Route::post('add_worker', 'frontend\Franchise@create_worker');
Route::post('add_service', 'frontend\Franchise@create_service');
Route::post('add_worker_company', 'frontend\Company@create_worker');
Route::post('add_service_company', 'frontend\Company@create_service');
