<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\StoreRequest;
use App\Models\Tag;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
//        dd($data);
//        Category::firstOrCreate(['title' => $data['title']],[
//            'title' => $data['title']
//        ]);
                Tag::firstOrCreate($data);
        return redirect()->route('admin.tag.index');
    }
}
