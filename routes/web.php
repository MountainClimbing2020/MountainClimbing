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
});
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
Route::get('report/board', function () {
    return view('report.board');
});
//写真館
Route::get('report/', 'PictureController@index');
Route::post('report/','PictureController@store' );
//登山サイトへリンク
Route::get('report/goodslink', function () {
    return view('report.goodslink');
});


