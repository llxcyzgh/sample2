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


// 测试用路由
Route::get('tt', 'UsersController@tt')->name('tt');
