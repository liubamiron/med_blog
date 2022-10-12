<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;


class DeleteController extends Controller
{
    public function __invoke(Tag $tag)
    {
//        dd(111);
        $tag->delete();
        return redirect()->route('admin.tag.index');
//        return view('admin.tags.index', compact('tag'));
    }
}
