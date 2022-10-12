<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;


class EditController extends Controller
{
    public function __invoke(Tag $tag)
    {
//        dd(111);
        return view('admin.tags.edit', compact('tag'));
    }
}
