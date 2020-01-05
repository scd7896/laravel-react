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
Route::get('/kimserver', 'TestController@index');
Route::resource('articles', 'ArticlesContoller');
Route::get('/test', function(){
    return view('test/hello');
});

Route::get('auth/login', function(){
    $credentials = [
        'email' => 'scd1212@naver.com',
        'password' => 'rlatjqj1423',
    ];

    if(! auth()->attempt($credentials)){
        return '로그인 정보가 저왁하지 않습니다.';
    }

    return redirect('protected');
});

Route::get('protected', function(){
    dump(session()->all());

    if(! auth()->check()){
        return '누구세요?';
    }

    return '어서 오세요' .auth()->user()->name;
});

Route::get('auth/logout', function(){
    auth()->logout();

    return '또 봐요~';
});