<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;



class EditController extends Controller
{
    public function __invoke(Post $post, Tag $tag)
    {
     // dd(111);
      $categories = Category::all();
     // $tags = Tag::all();
       return view('admin.posts.edit', compact('post', 'categories'));
    }
}
