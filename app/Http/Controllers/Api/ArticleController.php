<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    //
    public function list()
    {
        # code...
        $articles = Article::all();
        return response()->json($articles);
    }


    public function create()
    {
        # code...
        $categories = Category::all();
        return response()->json($categories);
    }

    public function save(StoreArticleRequest $request)
    {
        # code...
        $validated = $request->validated();

        $article = new Article();
        $article->name = $request->name;
        $article->details = $request->details;
        $article->category_id = $request->category_id;
        $article->slug =  Str::of($article->name)->slug('-');
        $article->is_used = True;
        $article->save();
        return response()->json($article,201);
    }

    public function delete($id)
    {
        # code...
        $article = Article::find($id);
        if($article){
            $article->delete();
            return response()->json("Deleted successfully");
        }
        return response()->json("Not found to be deleted!!!");
    }

    public function edit($id)
    {
        # code...
        $categories = Category::all();
        $article = Article::find($id);
        return response()->json([$id,$article,$categories]);
    }

    public function update($id, StoreArticleRequest $request)
    {
        # code...
        $validated = $request->validated();

        $article = Article::find($id);
        $article->name = $request->name;
        $article->details = $request->details;
        $article->category_id = $request->category_id;
        $article->save();
        $articles = Article::all();
        return response()->json(["updated successfully",$articles]);
    }

    public function show($id)
    {
        # code...
        $article = Article::find($id);
        $categoryName= Category::find($article->category_id)->name;
        return response()->json([$article,$categoryName]);
    }
}
