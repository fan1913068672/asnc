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

Route::group(['namespace'=>'Wocao\Index'],function(){
    Route::get('/','IndexController@index');
    Route::resource('news','NewsController');
    Route::resource('shcs','ShcsController');
    Route::resource('zxjj','ZxjjController');
    Route::resource('zcfg','ZcfgController');
    Route::resource('gzzd','GzzdController');
    Route::resource('szgz','SzgzController');
    Route::resource('swb','SwbController');
});


Route::group(['middleware'=>'auth','namespace'=>'Wocao\Article'],function(){
    Route::resource('pc','ArticlePictureController');
    Route::get('delete_article','DeleteArticleController@index');
    Route::post('delete_article','DeleteArticleController@post');
    Route::get('delete_article/{a_id}','DeleteArticleController@delete');
});

Route::group(['middleware'=>'auth','namespace'=>'Wocao\Ht'],function(){
    Route::get('article/create','HtController@get');
    Route::post('article','HtController@post');
    Route::get('info','HtController@info');
    Route::get('ht_index',function(){
        return view('wocao.ht_index');
    });



});
Route::group(['middleware'=>'auth','namespace'=>'Wocao\Link'],function(){
  Route::resource('links','LinkController');
  Route::post('linkchange','LinkController@changeOrder');
  Route::post('links/changeName','LinkController@changeName');
  Route::post('links/changeUrl','LinkController@changeUrl');
});



//验证码服务
Route::get('login/refereshcapcha', 'Auth\LoginController@refereshcapcha');
Auth::routes();
//注册完的页面跳转
Route::get('register/registered',function(){
    return view('test.test_register');
})->name('registered');
//激活邮箱的路由
Route::get('active/{encrypt_email}',['uses'=>'Auth\ActiveController@active','as'=>'active']);
//测试用的路由
Route::get('test',function(){
  $email = '1913068672@qq.com';
  $encrypt_email = encrypt($email);
  // dump($encrypt_email);
  // dd(decrypt($encrypt_email));
});
