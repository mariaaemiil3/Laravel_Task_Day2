<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function list()
    {
        # code...
        $categories = Category::all();
        return response()->json($categories);
    }


    public function save(StoreCategoryRequest $request)
    {
        # code...
        $validated = $request->validated();
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return response()->json($category,201);
    }

    public function delete($id)
    {
        # code...
        $category = Category::find($id);
        if($category){
            $category->delete();
            return response()->json("Deleted successfully");
        }
        return response()->json("Not found to be deleted!!!");
    }

    public function edit($id)
    {
        # code...
        $category = Category::find($id);
        return response()->json([$id,$category]);
    }

    public function update($id, StoreCategoryRequest $request)
    {
        # code...
        $validated = $request->validated();
        
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();
        return response()->json(["updated successfully",$category]);
    }

    public function show($id)
    {
        # code...
        $category = Category::find($id);
        $articles= Article::all()->where('category_id','=',$id);
        return response()->json([$category,$articles]);
    }
}
