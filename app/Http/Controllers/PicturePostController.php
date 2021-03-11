<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PicturePost;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;


class PicturePostController extends Controller
{
    public function index()
    {
        $posts =  DB::table('t_picture_posts')->orderBy('created_at', 'desc')->get();
//        $comments = DB::table('t_picture_comments')->count();

        return view('report.postpictureboard',['posts' => $posts]);
    /*['comments'=> $comments]*/
    }
    public function create()
    {
        return view('report.submitpictureboard');
    }
    public function store(Request $request)
    {
        $params = $request -> validate([
            'title' => 'required | max:50',
            'body' => 'required | max:2000',
        ]);

        PicturePost::create($params);

        return redirect () -> route('pictureboard');
    }
}

