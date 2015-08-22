<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    function index()
    {
        $posts = Post::all();
        return view('posts.index',['objs' => $posts]);
    }
    function show($id=1)
    {
        $obj = Post::find($id);
        return view('posts.show',['obj'=>$obj]);
    }
}
