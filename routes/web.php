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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','TopicsController@index')->name('root');

// 用户身份验证相关的路由
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// 用户注册相关路由
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// 密码重置相关路由
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Email 认证相关路由
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

// 用户相关的路由
Route::resource('users','UsersController',['only'=>['show','update','edit']]);
// topic相关路由
Route::resource('topics', 'TopicsController', ['only' => ['index', 'create', 'store', 'edit', 'destroy','update']]);
Route::get('topics/{topic}/{slug?}','TopicsController@show')->name('topics.show');
Route::post('topics/upload_image','TopicsController@uploadImage')->name('topics.upload_image');
// category相关路由
Route::resource('categories','CategoriesController',['only'=>['show']]);

// 回复相关路由
Route::resource('replies','RepliesController',['only'=>['store','destroy']]);
// 通知相关路由
Route::resource('notifications','NotificationsController',['only'=>['index']]);
Route::get('permission-denied', 'PagesController@permissionDenied')->name('permission-denied');
// 测试
Route::resource('post','PostController',['only'=>['show','create','store']]);

// 测试队列
Route::get('testQueue','TestsController@testQueue');

