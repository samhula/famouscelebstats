<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

class ControllerSitemap extends Controller
{
    public function index(){
        return response()->view('sitemap', [
            'articles' => Article::latest()->get()
        ])
        ->header('Content-Type', 'text/xml');
    }
}
