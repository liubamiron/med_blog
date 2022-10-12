<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
//        dd($data);
//        Category::firstOrCreate(['title' => $data['title']],[
//            'title' => $data['title']
//        ]);
                Post::firstOrCreate($data);
        return redirect()->route('admin.post.index');
    }
}
