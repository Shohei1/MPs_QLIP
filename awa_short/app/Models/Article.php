<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // モデルに関連付けるテーブル
    protected $table = 'articles';

    // テーブルに関連付ける主キー
    protected $primaryKey = 'id';

    // 登録・更新可能なカラムの指定
    protected $fillable = [
        'id',
        'article_category_id',
        'thumbnail',
        'title',
        'content',
        'icon_id',
        'is_show',
        'created_at',
        'updated_at'
    ];

    // リレーションの記述：hasMany
    //OsTypeとのリレーション
    public function articleCategories()
    {
        return $this->belongsTo('App\Models\ArticleCategory', 'article_category_id');
    }


    // articleテーブルから全てのデータを取得
    public function findAllArticles()
    {
        return Article::all();
    }

    // articleテーブルからペジネート用に6つのデータを取得
    public function findArticlesForPeginate()
    {
        return Article::paginate(6);
    }

    // articleテーブルから新着順にデータを三つだけ取得
    public function findLatestArticles()
    {
        return Article::latest()->take(3)->get();
    }

    public function articleByCategory()
    {
        return Article::where('article_category_id')->get();
    }

    /**
     * 任意のカテゴリを含むものとする（ローカル）スコープ
     *
     */
    public function scopeCategoryAt($query, $category_id)
    {
        if (empty($category_id)) {
            return;
        }

        //ここは絶対にarticle_category_id
        return $query->where('article_category_id', $category_id);
    }


    // 登録処理
    public function insertArticle($request)
    {
        // リクエストデータを基に管理マスターユーザーに登録する
        return $this->create([
            'article_category_id' => $request->article_category_id,
            'title'  => $request->title,
            'summary'  => $request->summary,
            'content'  => $request->content,
            'thumbnail' => $request->thumbnail,
            'icon_id'  => $request->icon_id,
        ]);
    }

    // 更新処理
    public function updateArticle($request, $article)
    {
        if (is_null($request->thumbnail)) {
            $request->thumbnail = $request->current_thumbnail;
        };

        $result = $article->fill([
            'article_category_id' => $request->article_category_id,
            'thumbnail' => $request->thumbnail,
            'title'  => $request->title,
            'content'  => $request->content,
            'thumbnail' => $request->thumbnail,
            'icon_id'  => $request->icon_id,
            'is_show' => $request->is_show,
        ])->save();

        return $result;
    }

    // 削除処理
    public function deleteArticleById($id)
    {
        return $this->destroy($id);
    }
}
