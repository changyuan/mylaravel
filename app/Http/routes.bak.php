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

Route::get('foo', function () {
    return "hello World";
});


Route::any('demo',"DemoController@index");

//Route::get('/demo/{id?}', function ($id=0) {  });

//Route::group(['as' => 'admin::'], function () {
//    Route::get('dashboard', ['as' => 'dashboard', function () {
//        // 路由被命名为 "admin::dashboard"
//    }]);
//});

//Route::get('user/profile', 'UserController@showProfile')->name('profile');


Route::get("res",function(){
         return response()->view("welcome")->withHeaders(['Content-type'=>'text/html',"charset"=>'utf8']);
});

Route::get("json","UserController@json");

Route::get("traits","UserController@traits");

Route::get("jsonp","UserController@jsonp");

Route::get('user/profile', [
    'as' => 'profile', 'uses' => 'UserController@showProfile'
]);

Route::get('user/redis', [
    'uses' => 'UserController@redis'
]);

Route::get('user/test', [
    'as' => 'test', 'uses' => 'UserController@test'
]);



Route::group(['as' => 'admin::'], function () {
    Route::get('dashboard', ['as' => 'dashboard', function () {
        // 路由被命名为 "admin::dashboard"
        return "dashboard";
    }]);
});


//Route::group(['middleware' => 'auth'], function () {
//    Route::get('/', function () {
//        // 使用 Auth 中间件
//    });
//
//    Route::get('user/profile', function () {
//        // 使用 Auth 中间件
//    });
//});


Route::group(['domain' => '{account}.mylaravel.com'], function () {
    Route::get('user/{id?}', function ($account, $id=0) {

        return $account;
    });
});

Route::get('blade', function () {
    return view('child')->with("work","<&nbsp,>");
});

Route::get('user/db', "UserController@db");


Route::get('/greet',function(){

    if (view()->exists('test.greeting')) {
       // return view("test.greeting",["name"=>"James"]);
        return view("test.greeting")->with("name","James");
    } else {
        throw new Exception("error");
    }
});
//Route::get('user/{id}/{name}', function ($id, $name) {
//    	return $id.$name;
//	})
//->where(['id' => '[0-9]+', 'name' => '[a-z]+']);


Route::get('/', function () {
    return view('welcome');
});
