<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('view','ViewController@index');
Route::get('conf','ViewController@view');

Route::get('news','ViewController@news');
Route::get('article','ViewController@article');
Route::get('layouts','ViewController@layouts');


//Route::get('/view', function () {
//    return view('my_laravel');
//});


//中间件 路由加保护过滤
Route::group(['middleware' => ['web']], function () {
    Route::get('admin/login','Admin\IndexController@login');

    Route::get('/test', function () {
//        session(['key' => '']);
        echo session('key').'<BR>';
        return 'test';
    });

});


//路由分组
Route::group(['prefix' => 'admin','namespace'=>'Admin','middleware'=>['web','adminlogin']],function(){  //前缀，命名空间分组
    Route::get('index','IndexController@index');
    Route::resource('article','ArticleController@index'); //资源路由
});

//Route::get('admin/login','Admin\IndexController@login');
//Route::get('admin/index','Admin\IndexController@index');


//资源路由

//blog.hd/admin/aritce/create
//blog.hd/admin/aritce/index
//blog.hd/admin/aritce/edit/{id}

//命名路由 - 控制器
//Route::get('test',['as' => 'profile','uses'=>'Admin\IndexController@index']);
//Route::get('test', 'Admin\IndexController@index')->name('profile');



//命名路由
Route::get('user',['as' => 'profile', function(){
    echo route('profile');
        return '<h1>命名路由</h1>';
}]);



Route::get('test','Admin\IndexController@index');  //注意这里用反斜杠


//参数约束
//Route::get('user/{id}', function ($id) {
//    return 'User '.$id;
//})->where('id','[0-9]+');


//可选参数
//Route::get('user/{id}/comment/{comment?}', function ($id=null,$comment=null) {
//    return 'User:'.$id.'---------comment:'.$comment;
//});


//Route::get('user/{id}', function ($id) {
//    return 'User '.$id;
//});

//多个参数
//Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
//    return $commentId;
//});


//Route::get('/hd', function () {
//    echo 'get';
//});
//
//Route::post('/hd', function () {
//    echo 'post';
//});
//
//Route::match(['get', 'post'], '/test', function () {
//    echo 'match';
//});
//
//Route::any('foo', function () {
//    echo 'foo';
//});



Route::group(['middleware' => ['web']], function () {
//    return 'Hello world';
});

