<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\Tag;

class ArticlesController extends Controller
{

    public function all() {
        $articles = Article::oldest()->get();

        if (request('tag')) {
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        }

        return view('articles/index', compact('articles'));
    }

    public function show(Article $article) {
        return view('articles.show', compact('article'));
    }

    public function create() {
        $tags = Tag::all();

        return view('articles.create', compact('tags'));
    }

    public function  store() {
        $this->validateArticle();

       

        $article = new Article(request(['title', 'excerpt', 'body']));
        $article->user_id = 1;

        $article->save();
        
        $article->tags()->attach(request('tags'));
        // Article::create($this->validateArticle());        

        return redirect(route('articles.index'));
        
    }

    public function edit(Article $article) {
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article) {        

        $article->update($this->validateArticle());

        return redirect($article->path());        
    }

    public function destroy() {}


    protected function validateArticle() {
        return request()->validate([
            'title' => ['required'],
            'excerpt' => 'required',
            'body' => 'required',
            'tags' => 'exists:tags,id'
        ]);
    }

}
