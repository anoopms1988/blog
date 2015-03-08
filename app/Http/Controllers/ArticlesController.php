<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Request;

class ArticlesController extends Controller {

    public function index() {
        $articles = Article::all();
        return View('articles.index', compact('articles'));
    }

    public function show($id = null) {
        $article = Article::find($id);

        return View('articles.show', compact('article'));
    }

    public function create() {
        return View('articles.create');        
    }
    
    public function save(Request $request) {
        $input=Request::all();
        dd($input);
        $Article=new Article();
        $Article->name=$input['name'];
        $Article->body=$input['save'];
        $Article->save();
        return route('articles');
    }
}
