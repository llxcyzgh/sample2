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

// 两个 uri 指向同一个控制器的方法
Route::get('/', 'StaticPagesController@home')->name('home');
// Route::get('/home', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');

// 注册功能
Route::get('signup', 'UsersController@create')->name('signup');
