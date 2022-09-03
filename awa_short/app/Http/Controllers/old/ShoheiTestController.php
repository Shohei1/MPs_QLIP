<?php

namespace App\Http\Controllers;

use App\Models\Shortcut;
use App\Models\OsType;
use App\Models\Software;
use App\Models\ScoreResult;
use App\Models\Game;
use App\Models\Icon;
use App\Models\Difficulty;
use Illuminate\Http\Request;


class ShoheiTestController extends Controller
{
    /**
     *  MainControllerに移行済みはコメントアウト 8/8
     */


    /** テーブル定義
     * @author shohei yoshida
     *
     */

    // public function __construct()
    // {
    //     $this->shortcut = new Shortcut();
    //     $this->software = new Software();
    //     $this->score_result = new ScoreResult();
    //     $this->game = new Game();
    //     $this->icon = new Icon();
    //     $this->icon = new Difficulty();
    // }

    /** ショートカットページ
     * @author shohei yoshida
     */

    // /**
    //  * 一覧表示
    //  */
    // public function shortcutShow(Request $request)
    // {
    //     // 検索系
    //     $input = '';
    //     $item = Shortcut::idEqual($request->input)->first();
    //     $param = ['input' => $request->input, 'item' => $item];

    //     // 一覧表示
    //     $shortcuts = $this->shortcut->findAllShortcuts();

    //     return view('back.back_shortcut', compact('shortcuts', 'input', 'param'));
    // }

    // /**
    //  * 削除処理
    //  */
    // public function shortcutDelete($id)
    // {
    //     // 指定されたIDのレコードを削除
    //     $deleteShortcut = $this->shortcut->deleteShortcutById($id);
    //     // 削除したら一覧画面にリダイレクト
    //     return redirect()->route('back.back_shortcut');
    // }

    // /**
    //  * 登録画面の表示
    //  */
    // public function shortcutNew(Request $request)
    // {
    //     // os_typeプルダウン用の変数と処理
    //     $os_type = new OsType;
    //     $os_types = $os_type->getLists()->prepend('選択', '');

    //     // softwareプルダウン用の変数と処理
    //     $software = new Software;
    //     $softwares = $software->getLists()->prepend('選択', '');

    //     // difficultyプルダウン用の変数と処理
    //     $difficulty = new Difficulty;
    //     $difficulties = $difficulty->getLists()->prepend('選択', '');

    //     return view('back.back_shortcut_new', compact('os_types', 'softwares', 'difficulties'));
    // }

    // /**
    //  * 登録処理
    //  */
    // public function shortcutStore(Request $request)
    // {
    //     $registerShortcut = $this->shortcut->insertShortcut($request);
    //     return redirect()->route('back.back_shortcut');
    // }

    // /**
    //  * 編集画面の表示
    //  */
    // public function shortcutEdit($id)
    // {
    //     $os_type = new OsType;
    //     $os_types = $os_type->getLists()->prepend('選択', '');

    //     // softwareプルダウン用の変数と処理
    //     $software = new Software;
    //     $softwares = $software->getLists()->prepend('選択', '');

    //     // difficultyプルダウン用の変数と処理
    //     $difficulty = new Difficulty;
    //     $difficulties = $difficulty->getLists()->prepend('選択', '');

    //     $shortcut = Shortcut::find($id);

    //     return view('back.back_shortcut_edit', compact('shortcut', 'os_types', 'softwares', 'difficulties'));
    // }

    // /**
    //  * 更新処理
    //  */
    // public function shortcutUpdate(Request $request, $id)
    // {
    //     $shortcut = Shortcut::find($id);
    //     $updateShortcut = $this->shortcut->updateShortcut(
    //         $request,
    //         $shortcut
    //     );
    //     return redirect()->route('back.back_shortcut');
    // }

    // /**
    //  * 検索処理
    //  */

    // // public function find(Request $request)
    // // {
    // //     return view('back.back_shortcut', ['input' => '']);
    // // }
    // /**
    //  * 検索表示処理
    //  */
    // // public function shortcutSearch(Request $request)
    // // {
    // //     $item = Shortcut::idEqual($request->input)->first();
    // //     $param = ['input' => $request->input, 'item' => $item];
    // //     return view('back.back_shortcut', $param);
    // // }



    // /** ソフトウェアページ
    //  * @author Shohei
    //  */

    // /**
    //  * 一覧画面
    //  */
    // public function softwareShow()
    // {
    //     $softwares = $this->software->findAllSoftwares();

    //     return view('back.back_software', compact('softwares'));
    // }

    // /**
    //  * 削除処理
    //  */
    // public function softwareDelete($id)
    // {
    //     // 指定されたIDのレコードを削除
    //     $deleteSoftware = $this->software->deleteSoftwareById($id);
    //     // 削除したら一覧画面にリダイレクト
    //     return redirect()->route('back.back_software');
    // }

    // /**
    //  * 登録画面の表示
    //  */
    // public function softwareNew(Request $request)
    // {
    //     return view('back.back_software_new');
    // }
    // /**
    //  * 登録処理
    //  */
    // public function softwareStore(Request $request)
    // {
    //     $registerSoftware = $this->software->insertSoftware($request);
    //     return redirect()->route('back.back_software');
    // }


    // /* 編集画面の表示
    //  */
    // public function softwareEdit($id)
    // {
    //     $software = Software::find($id);

    //     return view('back.back_software_edit', compact('software'));
    // }
    // /**
    //  * 更新処理
    //  */
    // public function softwareUpdate(Request $request, $id)
    // {
    //     $software = Software::find($id);
    //     $updateSoftware = $this->software->updateSoftware(
    //         $request,
    //         $software
    //     );

    //     return redirect()->route('back.back_software');
    // }


    // /**点数ページ
    //  * 一覧画面
    //  */
    // public function scoreResultShow()
    // {
    //     $score_results = $this->score_result->findAllScoreResults();

    //     return view('back.back_score_result', compact('score_results'));
    // }

    // /**
    //  * 削除処理
    //  */
    // public function scoreResultDelete($id)
    // {
    //     // 指定されたIDのレコードを削除
    //     $deleteScoreResult = $this->score_result->deleteScoreResultById($id);
    //     // 削除したら一覧画面にリダイレクト
    //     return redirect()->route('back.back_score_result');
    // }

    // /* ゲームページ
    //  * 一覧画面
    //  */
    // public function gameShow()
    // {
    //     $games = $this->game->findAllGames();

    //     return view('back.back_game', compact('games'));
    // }

    // /**
    //  * 削除処理
    //  */
    // public function gameDelete($id)
    // {
    //     // 指定されたIDのレコードを削除
    //     $deleteGame = $this->game->deleteGameById($id);
    //     // 削除したら一覧画面にリダイレクト
    //     return redirect()->route('back.back_game');
    // }

    // /**
    //  * 登録画面の表示
    //  */
    // public function gameNew(Request $request)
    // {
    //     return view('back.back_game_new');
    // }
    // /**
    //  * 登録処理
    //  */
    // public function gameStore(Request $request)
    // {
    //     $registerGame = $this->game->insertGame($request);
    //     return redirect()->route('back.back_game');
    // }


    // /* 編集画面の表示
    //  */
    // public function gameEdit($id)
    // {
    //     $game = Game::find($id);

    //     return view('back.back_game_edit', compact('game'));
    // }


    // /**
    //  * 更新処理
    //  */
    // public function gameUpdate(Request $request, $id)
    // {
    //     $game = Game::find($id);
    //     $updateGame = $this->game->updateGame(
    //         $request,
    //         $game
    //     );

    //     return redirect()->route('back.back_game');
    // }


    //見切り発車で初めてものだからとりあえずコメントアウト


    // public function searchId(Request $request)
    // {
    //     $item = Shortcut::idEqual($request->input)->first();
    //     $param = ['input' => $request->input, 'item' => $item];
    //     return view('admin.find', $param);
    // }
}