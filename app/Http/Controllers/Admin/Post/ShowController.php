<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;


class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
       //dd(111);

        return view('admin.posts.show', compact('post'));
    }
}
