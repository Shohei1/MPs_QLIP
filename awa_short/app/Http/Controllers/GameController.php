<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Shortcut;
use App\Models\ScoreResult;
use App\Models\Prefecture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{

    /** テーブル定義
     *
     * @author shohei yoshida
     *
     */

    public function __construct()
    {
        $this->shortcut = new Shortcut();
        $this->game = new Game();
        $this->score_result = new ScoreResult();
        $this->prefecture = new Prefecture();
    }


    /**
     * ゲームプレイページ
     * @author sakuragi
     * アクション番号１
     */
    public function gameShow($game_id)
    {

        $data = ScoreResult::where('game_id', $game_id)
            ->orderBy('score', 'desc')
            ->take(5)
            ->get();

        // type:1はキーボード
        // type:2はクイズ
        // DB::enableQueryLog();
        $game = $this->game->find($game_id);
        $os_types_id = $game->os_types_id;
        $software_id = $game->software_id;
        $difficulty_id = $game->difficulty_id;
        $number_of_questions = $game->number_of_questions;
        $type = $game->type;


        // 検索+ランダムに取得
        $shortcuts = $this->shortcut
            ->inRandomOrder()
            ->osTypesIdEqual($os_types_id)
            ->softwareIdEqual($software_id)
            ->difficultyIdEqual($difficulty_id)
            ->usageEqual($type)
            ->take($number_of_questions)
            ->get();


        if ($difficulty_id === 4) {
            $shortcuts = $this->shortcut
                ->inRandomOrder()
                ->osTypesIdEqual($os_types_id)
                ->softwareIdEqual($software_id)
                ->usageEqual($type)
                ->take($number_of_questions)
                ->get();
        }
        // dd(DB::getQueryLog());

        return view('front.shortcut_game', compact('shortcuts', 'data', 'game', 'game_id'));
    }

    /**
     * ゲームのスコアをDBに登録
     * @author sakuragi
     * アクション番号２
     */
    public function sendResult(Request $request)
    {
        $this->score_result->insertScore($request);
        return redirect()->route('front.ranking_details', $request->game_id);
    }

    /**
     * クイズ画面の表示
     * @author sakuragi
     * アクション番号３
     */
    public function quizGameShow($game_id)
    {
        // type:1はキーボード
        // type:2はクイズ
        $game = $this->game->find($game_id);
        $os_types_id = $game->os_types_id;
        $software_id = $game->software_id;
        $difficulty_id = $game->difficulty_id;
        $number_of_questions = $game->number_of_questions;
        $type = $game->type;

        // DB::enableQueryLog();
        // 検索+ランダムに取得
        if ($difficulty_id === 4) {
            $shortcuts = $this->shortcut
                ->inRandomOrder()
                ->osTypesIdEqual($os_types_id)
                ->softwareIdEqual($software_id)
                ->usageEqual($type)
                ->take($number_of_questions)
                ->get();
        } else {
            $shortcuts = $this->shortcut
                ->inRandomOrder()
                ->osTypesIdEqual($os_types_id)
                ->softwareIdEqual($software_id)
                ->difficultyIdEqual($difficulty_id)
                ->usageEqual($type)
                ->take($number_of_questions)
                ->get();
        }
        // dd(DB::getQueryLog());

        return view('front.quiz_game_play', compact('shortcuts', 'game'));
    }
}