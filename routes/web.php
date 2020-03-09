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

Route::pattern('id' , '[0-9]+');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});

//使用者認證
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//學生首頁
Route::get('/student','StudentController@index')->name('student.index');


//查詢-教室課表查詢
Route::get('/room','RoomController@index')->name('room');
Route::post('/room/show', 'RoomController@show')->name('room.timetable.show');
//查詢-節次時段對照
Route::get('/search/session','StudentController@session')->name('session');
//預約教室
Route::get('/book', 'BookController@index')->name('book');
Route::post('/book/store', 'BookController@store')->name('book.store');
//預約教室查詢
Route::get('/book/search', 'BookController@search')->name('book.search');
Route::post('/book/search/show', 'BookController@show')->name('book.show');
//教室使用狀態查詢
Route::get('/room/sta', 'BookController@roomsta')->name('room.sta');
Route::post('/room/sta/show', 'BookController@roomstashow')->name('room.sta.show');
//調課
Route::get('/book/transfer', 'BookController@transfer')->name('book.transfer');
Route::post('/book/transfer/store', 'BookController@transferstore')->name('book.transfer.store');

//後台首頁
Route::get('/admin', ['as' => 'admin.dashboard.index', 'uses' => 'AdminController@index']);

//進出教室名單
Route::get('/admin/status', ['as' => 'admin.status.index', 'uses' => 'StaController@index']);

//進出選擇教室查詢
Route::post('/admin/status/class', ['as' => 'admin.status.indexshow', 'uses' => 'StaController@indexshow']);

//預約教室查詢
Route::get('/admin/search', ['as' => 'admin.status.search', 'uses' => 'StaController@search']);

//進出選擇預約教室查詢
Route::post('/admin/search/class', ['as' => 'admin.status.searchshow', 'uses' => 'StaController@searchshow']);

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






