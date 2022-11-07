<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;




class EditController extends Controller
{
    public function __invoke(Post $post)
    {
      $categories = Category::all();
     // $tags = Tag::all();
       return view('admin.posts.edit', compact('post', 'categories'));
    }
}
