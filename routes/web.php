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

//使用者認證
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//學生首頁
Route::get('/student','StudentController@index')->name('student.index');

Route::get('/admin', ['as' => 'admin.dashboard.index', 'uses' => 'AdminController@index']);




