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


//查詢-節次時段對照
Route::get('/search/session','StudentController@session')->name('session');



//後台首頁

Route::get('/admin', ['as' => 'admin.dashboard.index', 'uses' => 'AdminController@index']);

//進出教室名單
Route::get('/admin/status', ['as' => 'admin.status.index', 'uses' => 'StaController@index']);

//預約教室查詢
Route::get('/admin/search', ['as' => 'admin.status.search', 'uses' => 'StaController@search']);

//預約教室
Route::get('/admin/reservation', ['as' => 'admin.book.index', 'uses' => 'BookController@adminindex']);

//新增預約教室
Route::get('/admin/reservation/create', ['as' => 'admin.book.create', 'uses' => 'BookController@admincreate']);

//儲存預約教室
Route::post('/admin', ['as' =>'admin.book.adminstore'  , 'uses' => 'BookController@adminstore']);

//編輯預約教室
Route::get('/admin/reservation/{id}/edit', ['as' => 'admin.book.edit'  , 'uses' => 'BookController@adminedit']);

//更新預約教室
Route::patch('/admin/reservation/{id}'   , ['as' => 'admin.book.adminupdate', 'uses' => 'BookController@adminupdate']);

//刪除預約教室
Route::get('/admin/reservation/{books}', 'BookController@adminshow')->name('admin.book.delete');
Route::delete('/admin/reservation/{id}',['as'=>'admin.book.admindestroy','uses'=>'BookController@admindestroy']);






