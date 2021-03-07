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
//oute::get('report/board','ReportPostController@index')->name('report_board');
//写真館（画像アップロード機能のみ）
Route::get('report/', 'PictureController@index');
Route::post('report/','PictureController@store' );
//写真館(掲示板機能アリ)
Route::get('report/picture','PicturePostController@index')->name('pictureboard');
Route::resource('posts', 'PicturePostController')->name('picturestore');
//登山サイトへリンク
Route::get('report/goodslink', function () {
    return view('report.goodslink');
});


