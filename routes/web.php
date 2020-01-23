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


//route pages

use App\Http\Controllers\OrganizationsController;

Route::get('/about', 'PageController@about');
//route authentication
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// Route::group(['middleware' => 'auth'], function () {
Route::get('/', 'PageController@index');

Route::get('/services', 'PageController@services');

//route posts
Route::resource('posts','PostsController');


Route::group(['middleware' => 'admin'], function () {
    Route::get('/dashboard', 'DashboardController@index');
//route admin
});

Route::group(['prefix' => 'super', 'middleware' => 'superadmin'], function () {
    Route::get('/dashboard', 'SuperAdminController@index');
    Route::post('/create-user', 'SuperAdminController@createUser')->name('create-user');
    
//route admin
});



Route::resource('admin','adminController');

Route::resource('customers','CustomersController');
//route branch
Route::resource('branch','branchcontroller');


//route organizations
Route::get('organizations','OrganizationsController@index');
Route::get('organizations/create','OrganizationsController@create');
Route::POST('organizations','OrganizationsController@store');
Route::GET('organizations/{organizations}','OrganizationsController@show');
Route::GET('organizations/{organizations}/edit','OrganizationsController@edit');
Route::PATCH('organizations/{organizations}','OrganizationsController@update');
Route::DELETE('organizations/{organizations}','OrganizationsController@destroy');


Route::GET('/init-permission', 'PermissionController@initPermission');
// Route::resource('organizations','OrganizationsController');






// });