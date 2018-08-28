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
// Route::get('/', function () {
//     return view('index');
// });
 Route::get('/', 'frontend\Home@index_route');
Route::group(['prefix' => '/accounts'], function ()
{


Route::get('/signup', 'frontend\Home@create');
Route::get('/individual', 'frontend\Individual@individual_route');
Route::get('/franchise', 'frontend\Franchise@franchise_route');
Route::get('/company', 'frontend\Company@company_route');
Route::get('/hireService', 'frontend\ServiceUser@hireService_route');
Route::get('/individualDashboard', 'frontend\Individual@ind_dashboard_route');
Route::get('/userDashboard', 'frontend\ServiceUser@serviceUser_dashboard_route');
Route::get('/workerDashboard', 'frontend\Franchise@franchise_dashboard_route');

Route::get('/serviceSignup', function () {
    return view('accounts.serviceSignup');
});
Route::get('/login', 'frontend\Home@login_route');
Route::get('/change_password', 'frontend\Home@password_route');
Route::get('/skill_search/{skill}', 'frontend\Home@skill_route');
Route::get('/workMarket', function () {
    return view('accounts.workMarket');
  });
// Route::get('/editWorker', function () {
//     return view('accounts.editWorker');
//   });
Route::get('/editWorker/{w_id}', 'frontend\Franchise@franchise_worker_route');
Route::get('/individualProfile/{w_id}', 'frontend\Franchise@worker_profile_route');
});


Route::post('create_User', 'frontend\Home@store');
Route::get('verify_account/{token}', 'frontend\Home@change_status');
Route::post('search', 'frontend\Home@searching');
Route::post('create_serviceUser', 'frontend\ServiceUser@store');
Route::post('login_User', 'frontend\Home@Login');
Route::get('logout', 'frontend\Home@Logout');
Route::post('change_pwd', 'frontend\Home@PasswordChange');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/accounts/individualProfile', function () {
//     return view('accounts.individualProfile');
// });






Route::post('Ind_personal_info', 'frontend\Individual@individual_info');
Route::post('Ind_dashboard_info', 'frontend\Individual@individual_dashbord');
Route::post('Ind_dashboard_img', 'frontend\Individual@individual_image');
Route::post('Ind_professional_info', 'frontend\Individual@individual_Professional_info');
Route::post('Ind_location_info', 'frontend\Individual@individual_location_info');
Route::post('personal_info', 'frontend\Franchise@franchise_info');
Route::post('company_info', 'frontend\Company@company_info');
Route::post('add_worker', 'frontend\Franchise@create_worker');
Route::post('add_service', 'frontend\Franchise@create_service');
Route::post('add_worker_company', 'frontend\Company@create_worker');
Route::post('add_service_company', 'frontend\Company@create_service');
Route::post('serviceUser_personal_info', 'frontend\ServiceUser@service_personal_info');
Route::post('serviceUser_detail_info', 'frontend\ServiceUser@service_detail_info');
Route::post('srvUser_dashboard_info', 'frontend\ServiceUser@service_dashboard_info');
Route::post('SrvUser_dashboard_img', 'frontend\ServiceUser@service_dashboard_image');


// Admin

Route::get('/admin/user', 'frontend\Admin@show_user');

Route::get('/admin/dashboard', 'frontend\Admin@admin_dashboard_route');
// Route::get('/admin/dashboard', function () {
//     return view('admin.admin_account.dashboard');
// });

Route::get('/admin/table', function () {
    return view('admin.admin_account.table');
});
Route::get('/admin/typography', function () {
    return view('admin.admin_account.typography');
});
Route::get('/admin/notification', function () {
    return view('admin.admin_account.notification');
});
Route::get('/admin/editUser/{w_id}', 'frontend\Admin@admin_edit_route');
Route::get('/admin/creatUser', 'frontend\Admin@admin_create_route');
Route::post('edit_user', 'frontend\Admin@admin_edit_user');
Route::get('delete_user/{userId}', 'frontend\Admin@admin_delete_user');
Route::get('admin_verify_account/{token}', 'frontend\Admin@change_status_admin');
Route::post('admin_add_category', 'frontend\Admin@create_category');

Route::get('send_test_email', function(){
 Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message)
 {
  $message->subject('Mailgun and Laravel are awesome!');
  $message->from('nabeelirbab@gmail.com', 'E-dehari');
  $message->to('nabeelirbab@gmail.com');
 });
});
// Route::get('get-location-from-ip',function(){
//     $ip= \Request::ip();
//     // dd($ip);
//     $data = \Location::get($ip);
//     // $data = \Location::get('192.168.100.15');
//     dd($data);
// });
// Route::get('google-piechart',array('as'=>'chart.piechart','uses'=>'frontend\Home@pieChart'));
