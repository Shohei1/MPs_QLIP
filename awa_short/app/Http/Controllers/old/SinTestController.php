<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Icon;
// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SinTestController extends Controller
{
    /**
     *  MainControllerに移行済みはコメントアウト 8/9
     */

    // public function __construct()
    // {
    //     $this->article = new Article();
    // }


    // // 記事ページ
    // // 一覧
    // public function articleShow()
    // {
    //     $articles = $this->article->findAllArticles();

    //     return view('back.back_article', compact('articles'));
    // }
    // // 削除処理
    // public function articleDelete($id)
    // {
    //     // 指定されたIDのレコードを削除
    //     $deleteArticle = $this->article->deleteArticleById($id);
    //     // 削除したら一覧画面にリダイレクト
    //     return redirect()->route('back.back_article');
    // }

    // // 登録画面の表示
    // public function articleNew(Request $request)
    // {
    //     // article_categoryプルダウン用の変数と処理
    //     $category = new ArticleCategory();
    //     $categories = $category->getLists()->prepend('選択', '');

    //     return view('back.back_article_new', compact('categories'));
    // }

    // // 登録処理
    // public function articleStore(Request $request)
    // {
    //     $registerArticle = $this->article->InsertArticle($request);
    //     return redirect()->route('back.back_article');
    // }

    // // 編集画面の表示
    // public function articleEdit($id)
    // {
    //     // article_categoryプルダウン用の変数と処理
    //     $category = new ArticleCategory();
    //     $categories = $category->getLists()->prepend('選択', '');

    //     $article = Article::find($id);

    //     return view('back.back_article_edit', compact('article', 'categories'));
    // }
    // //  更新処理
    // public function articleUpdate(Request $request, $id)
    // {
    //     $article = Article::find($id);
    //     $updateArticle = $this->article->updateArticle(
    //         $request,
    //         $article
    //     );

    //     return redirect()->route('back.back_article');
    // }


    /**
     * 削除処理
     */
    // public function articleDelete($id)
    // {
    //     // 指定されたIDのレコードを削除
    //     $deleteArticle = $this->book->deleteArticleById($id);

    //     // 削除したら一覧画面にリダイレクト
    //     return redirect()->route('back.back_article');
    // }
}
