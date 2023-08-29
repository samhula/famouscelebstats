<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'category', 'sub_category', 'slug', 'img_url', 'full_name', 'dob', 'profession', 'nationality', 'net_worth', 'height', 'content', 'home_articles'];

    public function scopeFilter($query, array $filters){
        // if($filters['tag'] ?? false){
        //     $query->where('tags', 'like', '%' . request('tag') . '%');
        // }

        // Internal search engine
        if($filters['query'] ?? false){
            $query->where('title', 'like', '%' . request('query') . '%');
        }
    }
}