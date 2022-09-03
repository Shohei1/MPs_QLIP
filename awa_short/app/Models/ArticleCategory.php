<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    use HasFactory;

    public function findAllArticleCategories()
    {
        return ArticleCategory::all();
    }

    public function getLists()
    {
        $categories = ArticleCategory::orderBy('id', 'asc')->pluck('name', 'id');

        return $categories;
    }

    public function atricle_categories()
    {
        $obj = $this->hasMany('App\Models\Article', 'article_category_id');
        return $obj;
    }
}