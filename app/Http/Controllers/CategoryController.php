<?php

namespace App\Http\Controllers;

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
        return view('category.list', ['categories' => $categories]);
    }

    public function create()
    {
        return view('category.create');
    }

    public function save(StoreCategoryRequest $request)
    {
        # code...
        $validated = $request->validated();
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect()->route('category.list');
    }

    public function delete($id)
    {
        # code...
        $category = Category::find($id);
        if($category)
            $category->delete();
        return redirect()->route('category.list');
    }

    public function edit($id)
    {
        # code...
        $category = Category::find($id);
        // return view('category.show',['id'=>$id]);
        return view('category.edit',[ 'id'=>$id, 'category'=>$category ]);
    }

    public function update($id, StoreCategoryRequest $request)
    {
        # code...
        $validated = $request->validated();
        
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();
        return redirect()->route('category.list');
    }

    public function show($id)
    {
        # code...
        $category = Category::find($id);
        $articles= Article::all()->where('category_id','=',$id);
        return view('category.show',['category'=>$category,'articles'=>$articles]);
    }

    
}
