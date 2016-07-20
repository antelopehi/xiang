<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::get('/', function () {
	return view('welcome');
});

Route::get('/test', function () {
	return view('test');
});

Route::get('admin/loging', function () {
	return view('admin/loging');
});

Route::get('admin', function () {
	return view('admin_template');
});

Route::get('demo', function () {
	return view('demo');
});
Route::get('demo/put/{x}', 'Demo\DemoController@putX');
Route::post('demo/view', 'Demo\DemoController@postX');
Route::get('demo/view', 'Demo\DemoController@getIndex');

Route::get('admin/test', 'Admin\MemberController@getList');
Route::post('v1/member-loging', 'Api\MemberController@v1DoLoging');
