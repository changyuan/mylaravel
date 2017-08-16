<?php


//api
Route::group(['prefix' => config('site.route.prefix.api'), 'namespace' => 'Api', 'middleware' => ['block:api', 'api']], function () {

    Route::get('/', 'IndexController@index');
    Route::get('ip', 'IndexController@ip');

    Route::any('foo', 'IndexController@foo');

});

//前台登陆
Route::group(['middleware'=>'web'],function(){

    Route::auth();
});


//前台
Route::group(['prefix' => config('site.route.prefix.frontend'), 'namespace' => 'Frontend', 'middleware' => ['block:frontend', 'web']], function () {


    // Route::get('api/users/{user}', function (App\User $user) {
    //     return $user->email;
    // });
    

    //桌面站主页
    Route::get('/', 'HomeController@index');

    //设置语言版本
    Route::get('lang', 'HomeController@setLang');

    Route::get('demo','DemoController@index');

    Route::get('store','DemoController@store');

    Route::get('recommend','HomeController@recommend');

});




//后台
Route::group(['prefix' => config('site.route.prefix.backend'), 'namespace' => 'Backend', 'middleware' => ['block:backend', 'web']], function () {


    Route::group(['prefix' => 'auth'], function () {


        Route::get('login', 'MemberController@getLogin');
        Route::post('login', 'MemberController@postLogin');

        Route::get('logout', 'MemberController@logout');
    });



    Route::group(['middleware' => ['auth:backend']], function () {

        Route::get('/', 'DashboardController@index');
        Route::get('/recommend', 'DashboardController@recommend');
        Route::get('/recommend/add/{arg?}', 'DashboardController@postrecommend');

        //重建缓存
        // Route::get('cache', 'AssistantController@getRebuildCache');

        // //开发演示
        // Route::get('demo/form', 'DemoController@getForm');
        // Route::get('demo/icon', 'DemoController@getIcon');

        // //文件上传
        // Route::get('upload/picture', 'AssistantController@getUploadPicture');
        // Route::get('upload/document', 'AssistantController@getUploadDocument');
        // Route::post('upload/picture', 'AssistantController@postUploadPicture');
        // Route::post('upload/document', 'AssistantController@postUploadDocument');

        //用户管理
        Route::get('me', 'UserProfileController@index');
        Route::put('me', 'UserProfileController@set');

        // Route::resource('user', 'UserController');
        // Route::resource('role', 'RoleController');
        // Route::resource('permission', 'PermissionController');
        //
        // //系统管理
        // Route::get('option', 'OptionController@getOption');
        // Route::put('option', 'OptionController@putOption');
        // Route::resource('log', 'LogController');
    });

});
