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
Route::get('/admin/detect1', function () {
   return view('admin.status.detect1');
})->name('admin.detect1');

Route::get('/admin/detestore', 'StaController@detestore')->name('admin.detestore');

//使用者認證
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//學生首頁
Route::get('/student','StudentController@index')->name('student.index');

//查詢-教室課表查詢
Route::get('/room','RoomController@index')->name('room');
Route::post('/room/show', 'RoomController@show')->name('room.timetable.show');
Route::post('/classtimetable', 'ClasstimetableController@show')->name('classtimetable.show');
//查詢-節次時段對照
Route::get('/search/session','StudentController@session')->name('session');
//預約教室
Route::get('/book', 'BookController@index')->name('book');
Route::post('/book/store', 'BookController@store')->name('book.store');
Route::get('/book/show', 'BookController@ownshow')->name('book.ownshow');
//預約教室查詢
Route::get('/book/search', 'BookController@search')->name('book.search');
Route::post('/book/search/show', 'BookController@show')->name('book.show');
//教室使用狀態查詢
Route::get('/room/sta', 'BookController@roomsta')->name('room.sta');
Route::post('/room/sta/show', 'BookController@roomstashow')->name('room.sta.show');
//調課
Route::get('/change', 'ChangeController@index')->name('change');
Route::get('/change/{id}/{course}', 'ChangeController@change')->name('change.change');
Route::post('/change/check', 'ChangeController@check')->name('change.check');
Route::post('/change/store', 'ChangeController@store')->name('change.store');
Route::get('/change/show', 'ChangeController@show')->name('change.show');
//學生課表查詢
Route::get('/stutimetable','StutimetableController@index')->name('stutimetable');


//後台首頁
Route::get('/admin', ['as' => 'admin.dashboard.index', 'uses' => 'AdminController@index']);

//偵測教室內狀態
//Route::get('/test', 'DetectController@store');

//偵測進入教室名單
Route::get('/admin/status/detect', ['as' => 'admin.status.detect', 'uses' => 'StaController@detectshow']);

//編輯警報器狀態的頁面
Route::get('/admin/status/detect/{id}/edit', ['as' => 'admin.status.detectedit'  , 'uses' => 'StaController@detectedit']);

//更新警報器狀態
Route::get('/admin/status/detect/{id}'   , ['as' => 'admin.status.detectupdate' , 'uses' => 'StaController@detectupdate']);

//儲存教室偵測
Route::post('/admin/status/detect', ['as' =>'admin.status.store'  , 'uses' => 'StaController@store']);

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
Route::post('admin/reservation/store', 'BookController@adminstore')->name('admin.book.adminstore');

//編輯預約教室
Route::get('/admin/reservation/{id}/edit', ['as' => 'admin.book.edit'  , 'uses' => 'BookController@adminedit']);

//更新預約教室
Route::patch('/admin/reservation/{id}'   , ['as' => 'admin.book.adminupdate', 'uses' => 'BookController@adminupdate']);

//刪除預約教室
Route::get('/admin/reservation/{books}', 'BookController@adminshow')->name('admin.book.delete');
Route::delete('/admin/reservation/{id}',['as'=>'admin.book.admindestroy','uses'=>'BookController@admindestroy']);

//調課
Route::get('/admin/change', ['as' => 'admin.change.index', 'uses' => 'ChangeController@adminindex']);

//新增調課
Route::get('/admin/change/create', ['as' => 'admin.change.create', 'uses' => 'ChangeController@admincreate']);

//儲存調課
Route::post('/admin', ['as' =>'admin.change.adminstore'  , 'uses' => 'ChangeController@adminstore']);

//編輯調課
Route::get('/admin/change/{id}/edit', ['as' => 'admin.change.edit'  , 'uses' => 'ChangeController@adminedit']);

//更新調課
Route::patch('/admin/change/{id}'   , ['as' => 'admin.change.adminupdate', 'uses' => 'ChangeController@adminupdate']);

//刪除調課
Route::get('/admin/change/{changes}', 'ChangeController@adminshow')->name('admin.change.delete');
Route::delete('/admin/change/{id}',['as'=>'admin.change.admindestroy','uses'=>'ChangeController@admindestroy']);






