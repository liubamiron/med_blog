<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;


class CreateController extends Controller
{
    public function __invoke()
    {
//        $categories = Category::all();
//        $tags = Tag::all();
//       return view('admin.posts.create', compact('categories', 'tags'));

        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }
}
