<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Post;

class PostController extends Controller
{
    // untuk halaman posts
    public function index(){
        return view('posts', [
            'title' => "Posts",
            'posts' => Post::all()
        ]);
    }

    // untuk halaman single posts
    public function show(Post $post){
        return view('post', [
            'title' => 'Single Posts',
            'post' => $post
        ]);
    }
}
