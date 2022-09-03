<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $game_list = DB::table('games')->get();
        $items = [
            'menu' => $game_list,
        ];
        return view('samples.game_menu', $items);
    }

    public function gamePlay(Request $request)
    {
        //リクエストからゲームのIDを取得
        $game_id = $request->game_id;

        // ゲームの詳細情報を取得
        $game_info = DB::table('games')
            ->where('id', $game_id)
            ->get();

        // ゲームの問題を取得
        $game_question = DB::table('short_cuts')
            ->where('id', $game_info->id)
            ->get();

        // 連想配列を作成
        $items = [
            'game_id' => $game_id,
            'game_info' => $game_info,
            'game_question' => $game_question,
        ];

        return view('samples.play_button', $items);
    }
}