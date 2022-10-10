<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke()
    {
//        dd(111);
        return view('admin.categories.create');
    }
}
