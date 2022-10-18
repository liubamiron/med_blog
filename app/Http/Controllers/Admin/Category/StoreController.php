<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;

//use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
 // dd($data);
//        Category::firstOrCreate(['title' => $data['title']],[
//            'title' => $data['title']
//        ]);
                Category::firstOrCreate($data);
        return redirect()->route('admin.category.index');
    }
}
