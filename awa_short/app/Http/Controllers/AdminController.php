<?php

namespace App\Http\Controllers;

use App\Models\Shortcut;
use App\Models\Software;
use App\Models\ScoreResult;
use App\Models\Game;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\OsType;
use App\Models\Difficulty;
use App\Models\Icon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->software = new Software();
        $this->score_result = new ScoreResult();
        $this->game = new Game();
        $this->article = new Article();
        $this->article_category = new ArticleCategory();
        $this->os_type = new OsType();
        $this->icon = new Difficulty();
        $this->icon = new Icon();
        $this->shortcut = new Shortcut();
        $this->middleware('auth');
    }

    /**
     * postLogin function
     * Authで認証して、ログインできたら管理画面を表示
     *
     * @param Request $request
     * @return back_shortcut.blade.php
     */


    // public function postLogin(Request $request)

    // public function postLogin(Request $request)
    // {
    //     $email = $request->email;
    //     $password = $request->password;
    //     if (Auth::attempt(['email' => $email, 'password' => $password])) {
    //         $admin_name = Auth::user()->name;
    //         $articles = $this->article->findAllArticles();
    //         return view('back.back_article', compact('articles'));
    //     } else {
    //         $msg = 'ログインに失敗しました。メールアドレスとパスワードが一致しているか確認してください。';
    //         return view('back.back_login', compact('msg'));
    //     };
    // }

    public function shortcutShow(Request $request)
    {
        // 検索系
        // $input = '';
        // $item = Shortcut::idEqual($request->input)->first();
        // $param = ['input' => $request->input, 'item' => $item];

        // // 一覧表示
        // $shortcuts = $this->shortcut->findAllShortcuts();

        // return view('back.back_shortcut', compact('shortcuts', 'input', 'param'));

        // 表示・検索
        $keyword = $request->input('keyword');

        $query = Shortcut::query();

        if (!empty($keyword)) {
            $query->where('description', 'LIKE', "%{$keyword}%")
                ->orWhere('key', 'LIKE', "%{$keyword}%")
                ->orWhere('software_id', 'LIKE', "%{$keyword}%");
        }

        $shortcuts = $query->get();

        return view('back.back_shortcut', compact('shortcuts', 'keyword'));
    }


    /**
     * 登録画面の表示
     */
    public function shortcutNew(Request $request)
    {
        // os_typeプルダウン用の変数と処理
        $os_type = new OsType;
        $os_types = $os_type->getLists()->prepend('選択', '');

        // softwareプルダウン用の変数と処理
        $software = new Software;
        $softwares = $software->getLists()->prepend('選択', '');

        // difficultyプルダウン用の変数と処理
        $difficulty = new Difficulty;
        $difficulties = $difficulty->getLists()->prepend('選択', '');

        return view('back.back_shortcut_new', compact('os_types', 'softwares', 'difficulties'));
    }

    /**
     * 登録処理
     */
    public function shortcutStore(Request $request)
    {
        $registerShortcut = $this->shortcut->insertShortcut($request);
        return redirect()->route('back.back_shortcut');
    }

    /**
     * 編集画面の表示
     */
    public function shortcutEdit($id)
    {
        // os_typeプルダウン用の変数と処理
        $os_type = new OsType;
        $os_types = $os_type->getLists()->prepend('選択', '');

        // softwareプルダウン用の変数と処理
        $software = new Software;
        $softwares = $software->getLists()->prepend('選択', '');

        // difficultyプルダウン用の変数と処理
        $difficulty = new Difficulty;
        $difficulties = $difficulty->getLists()->prepend('選択', '');

        $shortcut = Shortcut::find($id);

        return view('back.back_shortcut_edit', compact('shortcut', 'os_types', 'softwares', 'difficulties'));
    }

    /**
     * 更新処理
     */
    public function shortcutUpdate(Request $request, $id)
    {
        $shortcut = Shortcut::find($id);
        $updateShortcut = $this->shortcut->updateShortcut(
            $request,
            $shortcut
        );
        return redirect()->route('back.back_shortcut');
    }

    /**
     * 検索処理
     */

    // public function find(Request $request)
    // {
    //     return view('back.back_shortcut', ['input' => '']);
    // }
    /**
     * 検索表示処理
     */
    // public function shortcutSearch(Request $request)
    // {
    //     $item = Shortcut::idEqual($request->input)->first();
    //     $param = ['input' => $request->input, 'item' => $item];
    //     return view('back.back_shortcut', $param);
    // }

    /**
     * 削除処理
     * ソフトデリートに変更
     */
    public function shortcutDelete($id)
    {
        // 指定されたIDのレコードを削除
        $deleteShortcut = $this->shortcut->deleteShortcutById($id);
        // 削除したら一覧画面にリダイレクト
        return redirect()->route('back.back_shortcut');
    }

    /** 管理記事ページ
     * @author Sin sato
     */

    public function articleAllShow()
    {
        $articles = $this->article->findAllArticles();

        return view('back.back_article', compact('articles'));
    }
    // 削除処理
    public function articleDelete($id)
    {
        // 指定されたIDのレコードを削除
        $deleteArticle = $this->article->deleteArticleById($id);
        // 削除したら一覧画面にリダイレクト
        return redirect()->route('back.back_article');
    }

    // 登録画面の表示
    public function articleNew(Request $request)
    {
        // article_categoryプルダウン用の変数と処理
        $category = new ArticleCategory();
        $categories = $category->getLists()->prepend('選択', '');

        return view('back.back_article_new', compact('categories'));
    }

    // 登録処理
    public function articleStore(Request $request)
    {
        // $file_name = $request->thumbnail->getClientOriginalName();
        // $request->thumbnail = $file_name;
        // $registerArticle = $this->article->InsertArticle($request);
        // return redirect()->route('back.back_article');

        // $fileにイメージデータを格納する
        // $file = $request->file('thumbnail');
        // $file_name = $file->getClientOriginalName();
        $file = $request->file('thumbnail');
        $file_name = $request->file('thumbnail')->getClientOriginalName();
        $file_name = 'f' . date("YmdHis") . '_' . $file_name;
        Storage::putFileAs('./public/article_thumbnail', $file, $file_name);

        $article_category_id = $request->input('article_category_id');
        $title = $request->input('title');
        $summary = $request->input('summary');
        $content = $request->input('content');
        $this->article->create([
            'article_category_id' => $article_category_id,
            'title' => $title,
            'summary' => $summary,
            'thumbnail' => $file_name,
            'content' => $content
        ]);

        $articles = $this->article->findAllArticles();

        return view('back.back_article', compact('articles', 'article_category_id'));
    }

    // 編集画面の表示
    public function articleEdit($id)
    {
        // article_categoryプルダウン用の変数と処理
        $category = new ArticleCategory();
        $categories = $category->getLists()->prepend('選択', '');

        $article = Article::find($id);

        return view('back.back_article_edit', compact('article', 'categories'));
    }
    //  更新処理
    public function articleUpdate(Request $request, $id)
    {
        $article = Article::find($id);
        $updateArticle = $this->article->updateArticle(
            $request,
            $article
        );

        return redirect()->route('back.back_article');
    }

    /** 点数ページ
     * @author Shohei
     *
     * 一覧画面
     */
    /**点数ページ
     * 一覧画面
     */
    public function scoreResultShow()
    {
        $score_results = $this->score_result->findAllScoreResults();

        return view('back.back_score_result', compact('score_results'));
    }

    /**
     * 削除処理
     */
    public function scoreResultDelete($id)
    {
        // 指定されたIDのレコードを削除
        $deleteScoreResult = $this->score_result->deleteScoreResultById($id);
        // 削除したら一覧画面にリダイレクト
        return redirect()->route('back.back_score_result');
    }

    /** アイコンページ
     * @author Sin Sato
     * 一覧画面
     */
    public function iconShow()
    {
        $icons = $this->icon->findAllIcons();

        return view('back.back_icon', compact('icons'));
    }

    // 登録画面
    public function iconNew(Request $request)
    {
        return view('back.back_icon_new');
    }

    // 登録処理
    public function iconStore(Request $request)
    {
        $registerIcon = $this->icon->InsertIcon($request);
        return redirect()->route('back.back_icon');
    }

    // 編集画面
    public function iconEdit($id)
    {
        $icons = Icon::find($id);

        return view('back.back_icon_edit', compact('icons'));
    }


    // 編集処理
    public function iconUpdate(Request $request, $id)
    {
        $icon = Icon::find($id);
        $updateIcon = $this->icon->updateIcon($request, $icon);

        return redirect()->route('back.back_icon');
    }

    // 削除処理
    public function iconDelete($id)
    {
        // 指定のIDのレコードを削除
        $deleteIcon = $this->icon->deleteIconById($id);
        // 削除したら一覧画面にリダイレクト
        return redirect()->route('back.back_icon');
    }

    /** ソフトウェアページ
     * @author Shohei
     */

    /**
     * 一覧画面
     */
    public function softwareShow()
    {
        $softwares = $this->software->findAllSoftwares();

        return view('back.back_software', compact('softwares'));
    }

    /**
     * 登録画面の表示
     */
    public function softwareNew(Request $request)
    {
        return view('back.back_software_new');
    }
    /**
     * 登録処理
     */
    public function softwareStore(Request $request)
    {
        $registerSoftware = $this->software->insertSoftware($request);
        return redirect()->route('back.back_software');
    }


    /* 編集画面の表示
     */
    public function softwareEdit($id)
    {
        $software = Software::find($id);

        return view('back.back_software_edit', compact('software'));
    }
    /**
     * 更新処理
     */
    public function softwareUpdate(Request $request, $id)
    {
        $software = Software::find($id);
        $updateSoftware = $this->software->updateSoftware(
            $request,
            $software
        );

        return redirect()->route('back.back_software');
    }

    /**
     * 削除処理
     */
    public function softwareDelete($id)
    {
        // 指定されたIDのレコードを削除
        $deleteSoftware = $this->software->deleteSoftwareById($id);
        // 削除したら一覧画面にリダイレクト
        return redirect()->route('back.back_software');
    }


    /* ゲームページ
     * 一覧画面
     */
    public function gameShow()
    {
        $games = $this->game->findAllGames();

        return view('back.back_game', compact('games'));
    }

    /**
     * 登録画面の表示
     */
    public function gameNew(Request $request)
    {
        // os_typeプルダウン用の変数と処理
        $os_type = new OsType;
        $os_types = $os_type->getLists()->prepend('選択', '');

        // softwareプルダウン用の変数と処理
        $software = new Software;
        $softwares = $software->getLists()->prepend('選択', '');

        // difficultyプルダウン用の変数と処理
        $difficulty = new Difficulty;
        $difficulties = $difficulty->getLists()->prepend('選択', '');

        return view('back.back_game_new', compact('os_types', 'softwares', 'difficulties'));
    }
    /**
     * 登録処理
     */
    public function gameStore(Request $request)
    {
        $registerGame = $this->game->insertGame($request);
        return redirect()->route('back.back_game');
    }


    /* 編集画面の表示
     */
    public function gameEdit($id)
    {
        // os_typeプルダウン用の変数と処理
        $os_type = new OsType;
        $os_types = $os_type->getLists()->prepend('選択', '');

        // softwareプルダウン用の変数と処理
        $software = new Software;
        $softwares = $software->getLists()->prepend('選択', '');

        // difficultyプルダウン用の変数と処理
        $difficulty = new Difficulty;
        $difficulties = $difficulty->getLists()->prepend('選択', '');
        $game = Game::find($id);

        return view('back.back_game_edit', compact('game', 'os_types', 'softwares', 'difficulties'));
    }


    /**
     * 更新処理
     */
    public function gameUpdate(Request $request, $id)
    {
        $game = Game::find($id);
        $updateGame = $this->game->updateGame(
            $request,
            $game
        );

        return redirect()->route('back.back_game');
    }

    /**
     * 削除処理
     */
    public function gameDelete($id)
    {
        // 指定されたIDのレコードを削除
        $deleteGame = $this->game->deleteGameById($id);
        // 削除したら一覧画面にリダイレクト
        return redirect()->route('back.back_game');
    }
}