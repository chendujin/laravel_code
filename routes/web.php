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

// Route::get('/', function () { 
//     return 'Hello, World!'; 
// });

// Route::match(['get', 'post'], '/', function () {
//     return 'Hello Thomas';
// });

Route::namespace('Api')->group(function () {
    Route::get('/member', 'MemberController@info');
    Route::get('/task1', 'TaskController@home');
    Route::get('/test', 'TaskController@test');
    Route::post('/form', 'RequestController@form')->name('form.submit');
    // 用于显式上传表单
    Route::get('/form_page', 'RequestController@formPage');
    // 用于处理文件上传
    Route::post('/form/file_upload', 'RequestController@fileUpload');
});

Route::get('/task', 'TaskController@home');
Route::resource('mytest', 'PostController');

Route::fallback(function () {
    return '我是最后的屏障';
});

Route::middleware('throttle:3,1')->group(function () {
    Route::resource('mytest', 'PostController');
});

Route::get('task/{id}/delete', function ($id) {
    return '<form method="post" action="' . route('task.delete', [$id]) . '">
                <input type="hidden" name="_method" value="DELETE"> 
                <input type="hidden" name="_token" value="' . csrf_token() . '">
                <button type="submit">删除任务</button>
            </form>';
});

Route::delete('task/{id}', function ($id) {
    return 'Delete Task ' . $id;
})->name('task.delete');

