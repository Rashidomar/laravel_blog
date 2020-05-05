<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/service', 'PagesController@service');

Route::resource('/posts', 'PostsController');

Route::get('/user', 'UserController@login_page')->name('login');

Route::post('/user/login', 'UserController@user_login');

Route::get('/user/signup', 'UserController@signup_page');

Route::post('/user/register_user', 'UserController@user_register');

Route::get('/user/dashboard', 'UserController@user_dashboard')->middleware('auth');

;

Route::get('/user/logout', 'UserController@logout');





