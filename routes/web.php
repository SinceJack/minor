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

//Route::get('/', function () {
//    return view('welcome');
//});

//注册前台路由组
Route::prefix('/')->group(function(){

    //首页路由
    Route::get('/', 'IndexController@index');

    //关于路由
    Route::get('/about', 'AboutController@index');

    //大事记路由
    Route::get('/events', 'EventController@index');
    Route::get('/events/{event}', 'EventController@show');

    //公开课路由
    Route::get('/programs', 'ProgramController@index');
    Route::get('/programs/{program}', 'ProgramController@show');

    //画廊路由
    Route::get('/gallery', 'GalleryController@index');

    //新鲜事儿路由
    Route::get('/news', 'NewsController@index');
    Route::get('/news/{new}', 'NewsController@show');
    Route::post('/news/store', 'NewsController@store');

    //联系我们
    Route::post('/contact/store', 'ContactController@store');
});
