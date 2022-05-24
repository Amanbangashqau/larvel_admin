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

// Route::get('/', function () {
//     return view('welcome');
// });
//Route::get('/', 'login');

Route::get('/', '\App\Http\Controllers\Auth\LoginController@login');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('ajax',function()
{
   return view('message');
});
Route::post('/getcompany','AjaxController@index');
Route::resource('company', 'CompanyController');
Route::get('company_index_detail', 'CompanyController@index_details');
Route::get('create_company', 'CompanyController@create');
Route::post('company_edit', 'CompanyController@update');
Route::post('save_company', 'CompanyController@save');
Auth::routes();
Route::get('members', 'MemberController@index');
Route::get('add_member', 'MemberController@add_member');
Route::post('save_technician', 'MemberController@save_technician');
Route::get('edit_technician/{id}', 'MemberController@edit_technician');
Route::post('update_technician', 'MemberController@update_technician');
Route::get('delete_technician/{id}', 'MemberController@destroy');

Route::get('customer', 'CustomerController@index');
Route::get('add_customer', 'CustomerController@add_customer');
Route::post('save_customer', 'CustomerController@save_customer');
Route::get('edit_customer/{id}', 'CustomerController@edit_customer');
Route::post('update_customer', 'CustomerController@update_customer');
Route::get('delete_customer/{id}', 'CustomerController@destroy');


Route::get('service', 'ServiceController@index');
Route::get('create_service', 'ServiceController@create_service');
Route::post('save_service', 'ServiceController@save_service');
Route::get('edit_service/{id}', 'ServiceController@edit_service');
Route::post('update_service', 'ServiceController@update_service');
Route::get('delete_service/{id}', 'ServiceController@destroy');

Route::get('jobs', 'JobController@index');
Route::get('create_job', 'JobController@create_job');
Route::post('save_job', 'JobController@save_job');
Route::get('edit_job/{id}', 'JobController@edit_job');
Route::post('update_job', 'JobController@update_job');
Route::get('delete_job/{id}', 'JobController@destroy');

Route::get('category', 'CategoryController@category');
Route::post('save_category', 'CategoryController@save_category');
Route::get('edit_category/{id}', 'CategoryController@edit_category');
Route::post('update_category', 'CategoryController@update_category');
Route::get('delete_category/{id}', 'CategoryController@destroy');

Route::get('add_cat', 'CategoryController@add_cat');
Route::get('jobtype/{id}', 'CategoryController@jobtype');
Route::get('add_job_type/{id}', 'CategoryController@add_job_type');
Route::post('save_job_type', 'CategoryController@save_job_type');

Route::get('edit_job_type/{id}', 'CategoryController@edit_job_type');
Route::post('update_job_type', 'CategoryController@update_job_type');
Route::get('delete_job_type/{id}', 'CategoryController@destroy_job_type');


Route::get('reports', 'ReportController@index');
Route::get('technician_report', 'ReportController@technician_report');
Route::get('statistics_report', 'ReportController@statistics_report');
Route::get('activity_report', 'ReportController@activity_report');
Route::get('time_clock_report', 'ReportController@time_clock_report');
Route::get('mileage_report', 'ReportController@mileage_report');
Route::get('jobs_report', 'ReportController@jobs_report');
Route::get('setting', 'SettingController@index');

Route::get('add_sub_status', 'SettingController@add_sub_status');
Route::post('save_sub_status', 'SettingController@save_sub_status');
Route::get('edit_sub_status/{id}', 'SettingController@edit_sub_status');
Route::post('update_sub_status', 'SettingController@update_sub_status');
Route::get('delete_sub_status/{id}', 'SettingController@delete_sub_status');

Route::get('add_ad_group', 'SettingController@add_ad_group');
Route::post('save_job_source', 'SettingController@save_job_source');
Route::get('edit_job_source/{id}', 'SettingController@edit_job_source');
Route::post('update_job_source', 'SettingController@update_job_source');
Route::get('delete_job_source/{id}', 'SettingController@delete_job_source');

Route::get('add_company', 'SettingController@add_company');
Route::post('save_company', 'SettingController@save_company');
Route::get('edit_company/{id}', 'SettingController@edit_company');
Route::post('update_company', 'SettingController@update_company');
Route::get('delete_company/{id}', 'SettingController@delete_company');







/////////////////////////////ShowroomGodownController////////////////////////
//
// Route::post('/getshowroom_godown','AjaxController@getshowroom_godown');
// Route::post('showroomgodown', 'ShowroomGodownController@destroy');
// Route::post('showroomgodown_save', 'ShowroomGodownController@save');
// Route::post('showroom_godown_edit', 'ShowroomGodownController@update');
// Route::post('/headofice','ShowroomGodownController@update_head_office');
//
// /////////////////////////////Users////////////////////////
// Route::post('user_delete', 'UserController@destroy');
// Route::get('user_index', 'UserController@index');
// Route::post('add_user', 'UserController@create');
// Route::post('/getuser','AjaxController@get_user');
// Route::post('user_edit', 'UserController@update');
/////////////////////////////Chart_of_Accounts////////////////////////
// Route::get('Chart_of_Accounts', 'Chart_of_Accounts@index');
// Route::post('/generate_account_no','AjaxController@generate_account_no');
// Route::post('create_account_fn', 'Chart_of_Accounts@create');
// Route::post('get_childs', 'Chart_of_Accounts@get_child');
// Route::post('edit_account', 'Chart_of_Accounts@edit');
// /////////////////////////////voucher////////////////////////
// Route::get('/voucher', 'VoucherController@index');
// Route::post('post_voucher', 'VoucherController@create');
// Route::post('/getvoucher','VoucherController@getvoucher');
// Route::post('delete_voucher', 'VoucherController@destroy');
// /////////////////////////////Stock//////////////////////////////////
//
// Route::get('/inventory', 'StockController@index');
// Route::post('/save_stock', 'StockController@save');
// Route::post('/get_model','AjaxController@get_model');
// Route::resource('inventory', 'StockController');
//
// Route::post('/add_product','StockController@add_product');
// Route::post('/add_brand','StockController@add_brand');
// Route::post('/add_cat_type','StockController@add_cat_type');
// Route::post('/add_cat','StockController@add_cat');
// /////////////////////////////vendor//////////////////////////////////
// Route::resource('vendor', 'VendorController');
// Route::get('/vendor', 'VendorController@index');
// Route::post('/post_vendor', 'VendorController@save');
// Route::post('/get_vendor','AjaxController@get_vendor');
// Route::post('/update_vendor', 'VendorController@update');
// //////////////////////////Product/////////////////////////////////////
// Route::get('/product', 'ProductController@index');
// Route::post('/save_productt','ProductController@add_product');
// Route::post('/add_brand','ProductController@add_brand');
// Route::post('/change_brand_status','ProductController@change_brand_status');
// Route::post('/change_product_status','ProductController@change_product_status');
//
//
// /////////////////////////////PurchaseController////////////////////////
// Route::get('/purchase', 'PurchaseController@index');
// Route::post('purchase_model', 'PurchaseController@create');
// Route::post('/getvoucher','VoucherController@getvoucher');
// Route::post('delete_voucher', 'VoucherController@destroy');
// Route::post('/search_model','StockController@search_model');
// /////////////////////////////Stock//////////////////////////////////
//
// Route::post('/get_product','AjaxController@get_product');
// Route::post('/get_brand','AjaxController@get_brand');
// Route::post('/check_exist','AjaxController@check_exist');
// Route::post('/create_post_vendor','AjaxController@create_post_vendor');
