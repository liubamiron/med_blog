<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;


class IndexController extends Controller
{
    public function __invoke()
    {
//        dd(111);
        $tags = Tag::all();
        return view('admin.tags.index', compact('tags'));
    }
}
