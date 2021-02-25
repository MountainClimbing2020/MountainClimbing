<?php

namespace App\Http\Controllers;

use App\Http\Requests\PictureRequest;
use Illuminate\Http\Request;

class PictureController extends Controller
{
/**
 *
 * 投稿画像の保存フォームの表示
 *
 * @return Response
 *
 */
    public function index() {
        return view('report/submit');
    }
/**
 *
 * 投稿画像の保存
 *
 * @param PictureRequest $request
 * @return Response
 *
 */
    public function store(PictureRequest $request){
        $request->photo->storeAs('public/picture_images', Auth::id(), '.jpg');

        return redirect("picture") -> with('success','写真を登録しました');
    }

}
