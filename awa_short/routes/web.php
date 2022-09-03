<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\GameController;
use Illuminate\Http\Request;
use App\Models\Article;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//フロントのルーティングstart/////////////////////////////////////////////////////////////////////////
//動的ページstart/////////////////////////////////////////////////////////////////////////

// Route::get('/', function () {
//     return view('welcome');
// });

/**
 * @author shohei
 * トップページ
 */
// Route::get('/index', [MainController::class, 'articleShow'])->name('front.index');
Route::get('/', [MainController::class, 'articleShow'])->name('front.index');

/**
 * @author shohei
 * ゲームプレイページ
 */
// Route::get('/shortcut_game', function () {
//     return view('front.shortcut_game');
// });

Route::get('/shortcut_game/{game_id}', [GameController::class, 'gameShow'])->name('front.shortcut_game');


//クイズプレイ
Route::get('/quiz_game_play/{game_id}', [GameController::class, 'quizGameShow'])->name('front.quiz_game_play');

/**
 * @author shohei
 * ゲーム選択ページ
 */
// Route::get('/shortcut_select', [MainController::class, 'gameSelectionsShow'])->name('front.shortcut_select');
Route::get('/shortcut_select', function () {
    return view('front.shortcut_select');
})->name('front.shortcut_select');
Route::get('/shortcut_select_new', function () {
    return view('front.shortcut_select_new');
});

Route::get('/new_game_select', [MainController::class, 'gameSelect'])->name('front.new_game_select');




/**
 * @author shohei
 * フロント記事ページ
 */
// Route::get('/article', [MainController::class, 'articlePageShow'])->name('front.article');
Route::get('/article', [MainController::class, 'articleAndCategoryShow'])->name('front.article');

/**
 * @author shohei
 * //フロント記事詳細ページ
 */
Route::get('/article_details/{id}', [MainController::class, 'articleDetailsShow'])->name('front.article_details');

/**
 * @author sakuagi & shohei
 * ショートカットリストページ
 */
Route::get('/shortcut_list', [MainController::class, 'shortcutAndSoftwareShow'])->name('front.shortcut_list');

/**
 * @author sakuagi & shohei
 * ランキングリスト
 */
// Route::get('/ranking', [App\Http\Controllers\MainController::class, 'rankingShow'])->name('front.ranking');
// Route::get('/ranking_list', function () {
//     return view('front.ranking_list');
// });
Route::get('/ranking_list', [MainController::class, 'ranking'])->name('front.ranking_list');

/**
 * @author sakuagi & shohei
 * ランキング詳細
 */
Route::get('/ranking_details/{game_id}', [App\Http\Controllers\MainController::class, 'rankingShow'])->name('front.ranking_details');

//フロント動的ページルーティングend/////////////////////////////////////////////////////////////////////////


//フロント静的ページルーティングstart/////////////////////////////////////////////////////////////////////////


/**
 * @author sin & shohei
 * //ショートカットリストページ
 */
// ランディングページ

// Route::get('/landing', function () {
//     return view('front.landing');
// });
Route::get('/landing', [MainController::class, 'landing'])->name('front.landing');


//私たちについてページ
// Route::get('/about_us', function () {
//     return view('front.about_us');
// });
Route::get('/about_us', [MainController::class, 'about_us'])->name('front.about_us');

// プライバシーポリシーページ
// Route::get('/privacy_policy', function () {
//     return view('front.privacy_policy');
// });
Route::get('/privacy_policy', [MainController::class, 'privacy_policy'])->name('front.privacy_policy');


//お問合せページ
// Route::get('/contact', function () {
//     return view('front.contact');
// });
Route::get('/contact', [MainController::class, 'contact'])->name('front.contact');


//フロント静的ページルーティングend/////////////////////////////////////////////////////////////////////////

//フロントのルーティングend/////////////////////////////////////////////////////////////////////////




/** Backend Start
 *
 * @author Shohei
 * @author Sin
 * @author Sakuragi
 *
 *
 *
 *
 *
 *
 */
//バック（管理）のルーティングStart////////////////////////////////////////////////////////////////////////////////




/**
 * @author shohei yoshida
 * 管理トップページ・ショートカットページルーティング関係
 */

//検索のルーティング関係
// Route::get('back_shortcut/find', "ShoheiTestController@find");
// Route::post('back_shortcut/find', 'ShoheiTestController@search');

//ショートカットページのルーティング関係
// 一覧画面の表示
Route::get('/back_shortcut', [AdminController::class, 'shortcutShow'])->name('back.back_shortcut');

// // 作成中
// Route::get('/back_shortcut' . [AdminController::class, 'shortcutSearch'])->name('back.back_shortcut_search');

// 登録画面の表示
Route::get('/back_shortcut_new', [AdminController::class, 'shortcutNew'])->name('back.back_shortcut_new');
// 登録処理
Route::post('/back_shortcut_store', [AdminController::class, 'shortcutStore'])->name('back.back_shortcut_store');

// 編集画面のルーディング
Route::get('/back_shortcut_edit/{id}', [AdminController::class, 'shortcutEdit'])->name('back.back_shortcut_edit');
// 更新処理
Route::post('/back_shortcut_update/{id}', [AdminController::class, 'shortcutUpdate'])->name('back.back_shortcut_update');

// ハードデリート（削除）処理
Route::post('/back_shortcut_delete/{id}', [AdminController::class, 'shortcutDelete'])->name('back.back_shortcut_delete');

// author Shohei end



/**
 * @author Sin sato
 * 記事管理ページのルーティング関係
 */

// 画面表示
Route::get('/back_article', [AdminController::class, 'articleAllShow'])->name('back.back_article');
// 削除処理
Route::post('/back_article_delete/{id}', [AdminController::class, 'articleDelete'])->name('back.back_article_delete');

// 新規作成画面表示
Route::get('/back_article_new', [AdminController::class, 'articleNew'])->name('back.back_article_new');
// 登録処理

Route::post('/back_article_store', [AdminController::class, 'articleStore'])->name('back.back_article_store');
// 画像投稿処理
// Route::post('/back_article_thumbnail', [MainController::class, 'articleThumbnail'])->name('back.back_article_thumbnail');


// 記事編集画面
Route::get('/back_article_edit/{id}', [AdminController::class, 'articleEdit'])->name('back.back_article_edit');
// 更新処理
Route::post('/back_article_update/{id}', [AdminController::class, 'articleUpdate'])->name('back.back_article_update');
// 削除
Route::post('/destroy{id}', [AdminController::class, 'destroy'])->name('article.destroy');


/**
 * @author shohei yoshida
 * ソフトウェアページのルーティング関係
 */
// 一覧画面の表示
Route::get('/back_software', [AdminController::class, 'softwareShow'])->name('back.back_software');

// 登録画面の表示
Route::get('/back_software_new', [AdminController::class, 'softwareNew'])->name('back.back_software_new');
// 登録処理
Route::post('/back_software_store', [AdminController::class, 'softwareStore'])->name('back.back_software_store');

// 編集画面のルーディング
Route::get('/back_software_edit/{id}', [AdminController::class, 'softwareEdit'])->name('back.back_software_edit');
// 更新処理
Route::post('/back_software_update/{id}', [AdminController::class, 'softwareUpdate'])->name('back.back_software_update');

// ハードデリート（削除）処理
Route::post('/back_software_delete/{id}', [AdminController::class, 'softwareDelete'])->name('back.back_software_delete');


/**
 * @author shohei yoshida
 * 点数ページのルーティング関係
 */
// 一覧画面の表示
Route::get('/back_score_result', [AdminController::class, 'scoreResultShow'])->name('back.back_score_result');
// 削除処理
Route::post('/back_score_result_delete/{id}', [AdminController::class, 'scoreResultDelete'])->name('back.back_score_result_delete');

/**
 * @author shohei yoshida
 * ゲームページのルーティング関係
 */
// 一覧画面の表示
Route::get('/back_game', [AdminController::class, 'gameShow'])->name('back.back_game');

// 登録画面の表示
Route::get('/back_game_new', [AdminController::class, 'gameNew'])->name('back.back_game_new');
// 登録処理
Route::post('/back_game_store', [AdminController::class, 'gameStore'])->name('back.back_game_store');

// 編集画面のルーディング
Route::get('/back_game_edit/{id}', [AdminController::class, 'gameEdit'])->name('back.back_game_edit');
// 更新処理
Route::post('/back_game_update/{id}', [AdminController::class, 'gameUpdate'])->name('back.back_game_update');

// 削除処理
Route::post('/back_game_delete/{id}', [AdminController::class, 'gameDelete'])->name('back.back_game_delete');

// author Shohei end


/**
 * @author sin sato
 * アイコンページのルーティング関係
 */
// 一覧表示
Route::get('/back_icon', [AdminController::class, 'iconShow'])->name('back.back_icon');
// 削除処理
Route::post('/back_icon_delete/{id}', [AdminController::class, 'iconDelete'])->name('back.back_icon_delete');

// 登録画面の表示
Route::get('/back_icon_new', [AdminController::class, 'iconNew'])->name('back.back_icon_new');
// 登録処理
Route::post('/back_icon_store', [AdminController::class, 'iconStore'])->name('back.back_icon_store');

// 編集画面の表示
Route::get('/back_icon_edit/{id}', [AdminController::class, 'iconEdit'])->name('back.back_icon_edit');
// 更新処理
Route::post('/back_icon_update/{id}', [AdminController::class, 'iconUpdate'])->name('back.back_icon_update');


//バック（管理）のルーティングend////////////////////////////////////////////////////////////////



//その他(開発)のルーティングstart/////////////////////////////////////////////////////////////////////////


// fukushima start
// ゲームメニュー
Route::get('game/menu', 'App\Http\Controllers\TestController@index');
// ゲーム開始
Route::get('game/play', 'App\Http\Controllers\TestController@gamePlay');
// fukushima end


/**
 * @author kazuki sakuragi
 * auth関連のルーティング
 */

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/back_login', function () {
    return view('back.back_login');
});
// Route::post('back_login', [AdminController::class, 'postLogin']);
Route::post('back_article', function (Request $request) {
    $email = $request->email;
    $password = $request->password;
    if (Auth::attempt(['email' => $email, 'password' => $password])) {
        $admin_name = Auth::user()->name;
        $this->article = new Article();
        $articles = $this->article->findAllArticles();
        return view('back.back_article', compact('articles'));
    } else {
        $msg = 'ログインに失敗しました。メールアドレスとパスワードが一致しているか確認してください。';
        return view('back.back_login', compact('msg'));
    };
})->name('back_login');

Route::get('/back_logout', function () {
    Auth::logout();
    return view('back.back_login');
})->name('back.back_logout');

Route::get('/result', [GameController::class, 'sendResult']);

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');