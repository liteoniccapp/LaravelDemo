<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index()
    {
        $posts = \App\Post::all();
        return view('posts', ['posts' => $posts]);
    }

    public function show($id)
    {
        $post = \App\Post::find($id);
        return view('post-detail', ['post' => $post]);
    }

    public function random()
    {
        $post = \App\Post::all()->random();
        return view('random', ['post' => $post]);
    }

    public function create(Request $request)
    {
        //return dd($request);
        echo $request->title;
    }
}   
