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
//トップページ
Route::get('top', function () {
    return view('top');
})->name('top');
//HOME
Route::get('home', function () {
    return view('home');
});
//登山の基本
Route::get('basic/kokoroe', function () {
    return view('basic/kokoroe');
});
Route::get('basic/mochimono', function () {
    return view('basic/kokoroe');
});
Route::get('basic/prepare', function () {
    return view('basic/prepare');
});

//地域から探す
Route::get('region/search', function () {
    return view('region/search');
});

//計画を立てる
Route::get('plan/advice', function () {
    return view('report.advice');
});
Route::get('plan/sample', function () {
    return view('report.sample');
});


//みんなの登山報告

//写真館_1（画像アップロード機能のみ）
Route::get('report/', 'PictureController@index');
Route::post('report/','PictureController@store' );
//写真館_2(掲示板機能アリ)
//投稿
Route::get('report/pictureboard','PictureboardController@index' );
Route::post('report/pictureboard','PictureboardController@post' );

/*     $post = new App\PostPicture();
    $post->title = request('title');
    $post->body = request('body');
    $post->save();

    $files = request('files');
    if($files) foreach ((array)$files as $file) {
        $file->store('public');
        $post->pictures()->create(['filename'=> $file->hashName()]);
    }
    return redirect('report/pictureboard');
});
*/
/* //コメント
Route::post('report/piccomments', function(){
    $comment = new App\PicComment();
    $comment ->post_id =request('post_id');
    $comment->body = request('body');
    $comment->save();

    $files = request('files');
    if ($files) foreach ((array)$files as $file) {
        $file->store('public');
        $comment->pictures()->create(['filename' => $file->hashName()] );
    }
    return redirect('report/pictureboard');
});
 */


Route::get('report/','PicturePostController@index')->name('pictureboard');
//oute::resource('posts', 'PicturePostController')->name('picturestore');
//登山サイトへリンク
Route::get('report/goodslink', function () {
    return view('report.goodslink');
});


