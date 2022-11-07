<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            $categories = Category::all();
            return response()->json($categories);
        }
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',


        ]);

        $newCategory = new Category([
            'title' => 'required|string',

        ]);

        $newCategory->save();

        return response()->json($newCategory);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return response()->json($category);
    }

    public function showtitle($title)
    {
        $category = Category::findOrFail($title);
        return response()->json($category);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        {
            $category = Category::findOrFail($id);

            $request->validate([
                'title' => 'required|max:255',

            ]);

            $category->title = $request->get('title');


            $category->save();

            return response()->json($category);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Post::findOrFail($id);
        $category->delete();

        return response()->json($category::all());
    }
}
