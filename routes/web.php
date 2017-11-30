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
    Route::resource('pc','PictureController')->middleware('auth');
    Route::get('ht','HtController@get')->middleware('auth');
    Route::post('ht','HtController@post')->middleware('auth');
});
Route::group(['middleware'=>'auth'],function(){
    Route::get('info',function(){
        return view('wocao.info');
    });
    Route::get('ht_index',function(){
        return view('wocao.ht_index');
    });
    Route::get('delete_article','Wocao\DeleteArticleController@index');
    Route::post('delete_article','Wocao\DeleteArticleController@post');
    Route::get('delete_article/{a_id}','Wocao\DeleteArticleController@delete');
});

//验证码服务
Route::get('/login/refereshcapcha', 'Auth\LoginController@refereshcapcha');
Auth::routes();

