<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

use App\Models\Article;
use Auth;

class ControllerArticle extends Controller
{
    // Getting relevant articles
    public function index(){
        return view('index', [
            'main' => Article::latest()
            ->whereBetween('home_articles', [1, 6])
            ->orderBy('home_articles', 'desc')
            ->get(),
            'trending' => Article::inRandomOrder()
            ->limit(3)
            ->get(),
            'recent' => Article::latest()
            ->take(12)
            ->get()
            ]);
    }

    // Show single article
    public function show(Article $article){
        return view('article', [
            'article' => $article,
            'trending' => Article::inRandomOrder()
            ->limit(3)
            ->get(),
            'related' => $this->related($article)
        ]);
    }

    // Create a new article
    public function create(){
        $id = Auth::id();

        if($id == 1){
            return view('create');
        }
        return redirect('/');
    }

    // Storing single article
    public function store(Request $request){

        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'sub_category' => 'required',
            'slug' => ['required', Rule::unique('articles', 'slug')],
            'img_url' => 'required',
            'img_credit' => 'required',
            'full_name' => 'nullable',
            'dob' => 'nullable',
            'profession' => 'nullable',
            'nationality' => 'nullable',
            'net_worth' => 'nullable',
            'height' => 'nullable',
            'content' => 'required',
            'home_articles' => ['nullable', Rule::unique('articles', 'home_articles')] 
        ]);

        if($request->hasFile('img_url')){
            $formFields['img_url'] = $request->file('img_url')->store('images', 'public');
        }

        Article::create($formFields);
        return redirect('/');
    }

    public function related(Article $article){
        return Article::where('sub_category', '=', $article->sub_category)
            ->where('id', '!=', $article->id)
            ->take(3)
            ->get(); 
    }

    public function categories(){
        return view('categories',[
            'categories' => Article::distinct()
            ->orderBy('sub_category')
            ->get('sub_category')
        ]);
    }
}