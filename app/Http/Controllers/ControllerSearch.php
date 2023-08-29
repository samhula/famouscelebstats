<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;

class ControllerSearch extends Controller
{
    public function index(){
        $searchQuery = request()->query('query');
        return view('search', 
                ['articles' => Article::latest()
                    ->filter(request(['query']))
                    ->paginate(12)
                ]
            )
            ->with(['query' => $searchQuery]);
    }
}