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
// 最简单的 route 调用页面
// Route::get('/', function () {
//     return view('welcome');
// });

// 静态页面
// 两个 uri 指向同一个控制器的方法
Route::get('/', 'StaticPagesController@home')->name('home');
//Route::get('/home', 'StaticPagesController@home')->name('home2');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');

// 注册功能
// Route::get('signup', 'UsersController@create')->name('signup');

// restful 用户资源(共7个路由), 包括显示用户列表、用户个人、创建新用户、个人修改页面 和 执行创建新用户、修改(更新)用户、删除用户动作
Route::resource('users', 'UsersController');

// session 用户登陆相关路由, 显示用户登陆页面(创建session)、执行用户登陆动作(保存session)、退出用户登陆动作(删除session)
Route::get('login','SessionsController@create')->name('login');
Route::post('login','SessionsController@store')->name('login');
Route::delete('logout','SessionsController@destroy')->name('logout');

// 新用户邮箱验证
Route::get('/signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');

// 显示重置密码的邮箱发送页面
Route::get('password/reset','Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// 执行邮箱发送重设链接动作
Route::post('password/email','Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// 显示密码更新页面
Route::get('password/reset/{token}','Auth\ResetPasswordController@showResetForm')->name('password.reset');
// 执行密码更新操作
Route::post('password/reset','Auth\ResetPasswordController@reset')->name('password.update');



// 测试用路由
Route::get('tt', 'UsersController@tt')->name('tt');
