<?php

namespace App\Http\Controllers;

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
        return view('article.list', ['articles' => $articles]);
    }

    public function create()
    {
        # code...
        $categories = Category::all();
        return view('article.create', ['categories'=>$categories]);
        // return view('article.create');
    }

    public function save(Request $request)
    {
        # code...
        // echo $request;
        $article = new Article();
        $article->name = $request->name;
        $article->details = $request->details;
        $article->category_id = $request->categories;
        $article->slug =  Str::of($article->name)->slug('-');
        $article->is_used = True;
        $article->save();
        return redirect()->route('article.list');
    }

    public function delete($id)
    {
        # code...
        $article = Article::find($id);
        if($article)
            $article->delete();
        return redirect()->route('article.list');
    }

    public function edit($id)
    {
        # code...
        $categories = Category::all();
        $article = Article::find($id);
        // return view('category.show',['id'=>$id]);
        return view('article.edit',[ 'id'=>$id, 'article'=>$article, 'categories'=>$categories ]);
    }

    public function update($id, Request $request)
    {
        # code...
        $article = Article::find($id);
        $article->name = $request->name;
        $article->details = $request->details;
        $article->category_id = $request->categories;
        $article->save();
        return redirect()->route('article.list');
    }

    public function show($id)
    {
        # code...
        $article = Article::find($id);
        $category= Category::find($article->category_id);
        return view('article.show',['article'=>$article,'category'=>$category]);
    }
}
