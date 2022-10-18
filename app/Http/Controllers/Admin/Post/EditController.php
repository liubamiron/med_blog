<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;



class EditController extends Controller
{
    public function __invoke(Post $post, Tag $tag)
    {
      dd(111);
      // return view('admin.tags.edit', compact('post'));
       // return view('admin.tags.edit', compact('tag'));
      // return view('admin.posts.edit', compact('post'));
    }
}
