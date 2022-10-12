<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;


class IndexController extends Controller
{
    public function __invoke()
    {
//        dd(111);
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }
}
