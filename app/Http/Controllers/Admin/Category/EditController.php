<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

//use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Category $category)
    {

        return view('admin.categories.edit', compact('category'));
    }
}
