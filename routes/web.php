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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/member/search','MemberController@search');
Route::resource('family','FamilyController');
Route::resource('district', 'DistrictController');
Route::resource('area', 'AreaController');
Route::resource('member','MemberController');
Route::resource('leader', 'LeaderController');
// Route::group(['prefix' => 'manage', 'middleware' => ['role:admin']], function(){
// 	Route::get('/', 'ManageController@index');
// 	Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
// });

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/api/member', 'MemberController@getData');