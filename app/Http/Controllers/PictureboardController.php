<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostPicture;
use Illuminate\Support\Facades\DB;

class PictureboardController extends Controller
{
    public function index()
    {
        $posts = DB::table('post_pictures')
                                ->latest()
                                ->get();
        return view('report/picboardhome',['posts' =>$posts]);
    }
    public function post(request $request)
    {
        $param =[
            'title' => $request->title,
            'body' => $request->body
        ];
        $this -> index();
        $files = request('files');
        $posts = DB::table('pictures');
        if($files) foreach ((array)$files as $file) {
            $file->store('public');
            $posts->pictures()->create(['filename'=> $file->hashName()]);
        }
        DB::table('post_pictures')->insert($param);
    return redirect('report/pictureboard');

    }
}
