<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;


class CreateController extends Controller
{
    public function __invoke()
    {
//        dd(111);
        return view('admin.tags.create');
    }
}
