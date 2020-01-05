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
// DB::listen(function ($query){
//     var_dump($query);
// });
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

Route::get('protected', ['middleware'=>'auth',function(){
    dump(session()->all());

    return '어서 오세요' .auth()->user()->name;
}]);

Route::get('auth/logout', function(){
    auth()->logout();

    return '또 봐요~';
});

Route::get('mail', function(){
    $testtest = '메일 전송 테스트';
    return Mail::send(
        'emails.articles.created',
        compact('testtest'),
        function($message) use($testtest){
            $message->to('scd1212@naver.com');
            $message->subject('메세지를 테스트로 보내보져' .$testtest);
        }
    );
});