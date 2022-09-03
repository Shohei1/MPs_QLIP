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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{

    /** テーブル定義
     *
     * @author shohei yoshida
     *
     */

    public function __construct()
    {
        $this->shortcut = new Shortcut();
        $this->software = new Software();
        $this->score_result = new ScoreResult();
        $this->game = new Game();
        $this->article = new Article();
        $this->article_category = new ArticleCategory();
        $this->os_type = new OsType();
        $this->icon = new Difficulty();
        $this->icon = new Icon();
    }

    /** トップページ
     * @author shohei yoshida
     */


    //記事一覧表示
    /**持ってくるもの
     * 「新着順」記事テーブルの画像・日時・タイトル・カテゴリー
     */
    public function articleShow()
    {
        $latest_articles = $this->article->findLatestArticles();
        return view('front.index', compact('latest_articles'));
    }


    /** 静的なランキング一覧表示ページ
     * @author shohei yoshida
     *
     */

    public function ranking()
    {
        return view('front.ranking_list');
    }

    /** ランキング表示ページ
     * @author shohei yoshida
     *
     */

    public function rankingShow($game_id)
    {
        $data = ScoreResult::where('game_id', $game_id)
            ->orderBy('score', 'desc')
            ->take(100)
            ->get();
        $game = Game::where('id', $game_id)->get();
        // $game = $this->game->find($game_id);

        return view('front.ranking_details', compact('data', 'game'));
    }


    // }

    /** 動的なゲーム選択画面ページ
     * @author shohei yoshida
     * 未実装
     *
     */
    public function gameSelectionsShow(Request $request)
    {
        // ペジネーション用
        // $sort = $request->sort;

        // 記事のカテゴリー
        // $os_type = $this->os_type;
        // $os_types = $os_type->getLists();

        // $os_id = $request->os_id;

        // os_idごとにゲームの取得
        // $games = Game::categoryAt($os_id);
        // ->paginate(4);

        $softwarelists = $this->software->getLists();
        // $softwares = $this->software->findAllSoftwares();
        $id = $request->id;

        $softwares = Software::softwareAt($id);
        // return view('front.shortcut_select', compact('games', 'sort', 'os_types', 'os_id'));
        return view('front.shortcut_select', [
            // 'games' => $games,
            // 'sort' => $sort,
            // 'posts' => $posts,
            // 'os_types' => $os_types,
            // 'os_id' => $os_id,
            'softwares' => $softwares,
            'softwarelists' => $softwarelists
        ]);
    }

    /** 静的なゲーム選択ページ
     * @author shohei yoshida
     * 時間があれば上の動的なやつにする
     *
     */
    public function gameSelect(Request $request)
    {

        $software = $this->software;
        $softwares = $software->getLists();
        $software_id = $request->software_id;


        // $scoreFind = $this->score_result->findHighestResultsByGame($game_id);

        $games = $this->game->findAllGames()
            ->sortBy('software_id')
            ->groupBy('software_id');

        // $count = Game::count();

        // $games = Game::softwareAt($software_id)
        //     ->orderBy('software_id')
        //     ->groupBy('software_id')
        //     ->get();


        return view('front.new_game_select', compact(
            'games',
            'softwares',
            'software_id'
            // 'score'
        ));
    }



    /** 記事リストページ
     * @author shohei & sin
     *
     */

    public function articleAndCategoryShow(Request $request)
    {
        // ペジネーション用
        $sort = $request->sort;

        // 記事のカテゴリー
        // $category = $this->article_category;
        // $categories = $category->getLists();
        $category_id = $request->category_id;

        $categorylist = ArticleCategory::all();

        //修正されたコード：scopeを利用した検索
        $articles = Article::orderBy('created_at', 'desc')
            //categoryAtはスコープをモデルに描いてる
            ->categoryAt($category_id)
            ->paginate(8);

        return view('front.article', [
            'articles' => $articles,
            'sort' => $sort,
            // 'categories' => $categories,
            'category_id' => $category_id,
            'categorylist' => $categorylist
        ]);
    }

    /** 記事詳細ページ
     * @author shohei
     *
     */
    public function articleDetailsShow($id)
    {
        $article = Article::find($id);
        $latest_articles =
            $this->article->findLatestArticles();

        return view('front.article_details', compact('article', 'latest_articles'));
    }



    /** ショートカットリストページ
     * @author sakuragi & shohei
     */
    public function shortcutAndSoftwareShow(Request $request)
    {
        // ペジネーション用
        // $sort = $request->sort;

        // ショートカットのソフトウェア
        $software = $this->software;
        $softwares = $software->getLists();
        $software_id = $request->software_id;
        $os_types_id = $request->os_types_id;

        $softwarelist = Software::all();

        $shortcuts = Shortcut::orderBy('difficulty_id', 'asc')
            ->osAt($os_types_id)
            ->softwareAt($software_id)
            ->get();
        // ->paginate(50);



        $allShortcuts = $this->shortcut->findSomeShortcuts();

        // ショートカットの数
        $count = $allShortcuts->count();

        // $mac_shortcuts = $this->shortcut->findAllMacShortcuts();
        // $windows_shortcuts = $this->shortcut->findAllWindowsShortcuts();
        // $count = $mac_shortcuts->count();
        return view('front.shortcut_list', compact(
            'shortcuts',
            // 'sort',
            'softwares',
            'software_id',
            'os_types_id',
            'count',
            'allShortcuts',
            'softwarelist'
            // 'mac_shortcuts',
            // 'windows_shortcuts'
        ));
    }


    public function landing()
    {
        return view('front.landing');
    }
    public function about_us()
    {
        return view('front.about_us');
    }
    public function privacy_policy()
    {
        return view('front.privacy_policy');
    }
    public function contact()
    {
        return view('front.contact');
    }
}