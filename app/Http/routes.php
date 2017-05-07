<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
    Route::any('index',['uses' => 'WebController@index']);
    Route::any('connect',['uses' => 'ConnectController@connect']);
    Route::any('repair',['uses' => 'RepairController@repair']);
    Route::any('repair/save',['uses' => 'RepairController@save']);
    Route::any('demand',['uses' => 'DemandController@demand']);
    Route::any('demand/save',['uses' => 'DemandController@save']);
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::get('admin/login', 'Admin\AuthController@getLogin');
    Route::post('admin/login', 'Admin\AuthController@postLogin');
    Route::get('admin/register', 'Admin\AuthController@getRegister');
    Route::post('admin/register', 'Admin\AuthController@postRegister');
    Route::get('admin', 'AdminController@index');



});

