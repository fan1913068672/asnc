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

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Request;

Route::group(['namespace'=>'Wocao'],function(){
//  Route::get('index', 'IndexController@index');
    Route::get('/','IndexController@index');
    Route::resource('news','NewsController');
    Route::resource('shcs','ShcsController');
    Route::resource('zxjj','ZxjjController');
    Route::resource('zcfg','ZcfgController');
    Route::resource('gzzd','GzzdController');
    Route::resource('szgz','SzgzController');
    Route::resource('swb','SwbController');
    Route::resource('pc','PictureController');
    //记得加上中间件 auth
    //试图直接访问ht是不可以的之后可以改变方法来处理

});
Route::group(['middleware'=>'auth','namespace'=>'Wocao'],function(){
    Route::get('article/create','HtController@get');
    Route::post('article','HtController@post');
    Route::get('info',function(){
        return view('wocao.info');
    });
    Route::get('ht_index',function(){
        return view('wocao.ht_index');
    });
    Route::get('delete_article','DeleteArticleController@index');
    Route::post('delete_article','DeleteArticleController@post');
    Route::get('delete_article/{a_id}','DeleteArticleController@delete');
});

//验证码服务
Route::get('login/refereshcapcha', 'Auth\LoginController@refereshcapcha');
Auth::routes();
Route::get('register/registered',function(){
    return view('test.test_register');
})->name('registered');
Route::get('active/{email}',['uses'=>'Auth\ActiveController@active','as'=>'active']);
Route::get('fail',function(){
    return "此用户没有激活";
});