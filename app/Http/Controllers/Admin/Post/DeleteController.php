<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;


class DeleteController extends Controller
{
    public function __invoke(Post $post)
    {
//        dd(111);
        $post->delete();
        return redirect()->route('admin.post.index');
//        return view('admin.posts.index', compact('post'));
    }
}
