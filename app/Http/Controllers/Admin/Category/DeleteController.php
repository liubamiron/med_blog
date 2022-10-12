<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

//use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Category $category)
    {
//        dd(111);
        $category->delete();
        return redirect()->route('admin.category.index');
//        return view('admin.categories.index', compact('category'));
    }
}
