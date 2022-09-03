<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScoreResult extends Model
{

    /**
     * @author shohei yoshida
     *
     */
    protected $table = 'score_results';
    // テーブルに関連付ける主キー
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'user_id',
        'name',
        'prefecture_id',
        'game_id',
        'score',
        // 'is_show',
        'created_at',
        'deleted_at'
    ];
    const UPDATED_AT = NULL;

    // リレーションの記述：hasMany
    //prefectureとのリレーション
    public function prefectures()
    {
        return $this->belongsTo('App\Models\Prefecture', 'prefecture_id');
    }
    //gamesとのリレーション
    public function games()
    {
        return $this->belongsTo('App\Models\Game', 'game_id');
    }

    /**管理画面トップ（ショートかっと）
     * 管理画面トップ用にshortcutテーブルから全てのデータを取得
     */
    public function findAllScoreResults()
    {
        return ScoreResult::all();
    }

    // ゲーム画面で5つの最高点を表示
    public function findHighestResultsByGame($game_id)
    {

        return ScoreResult::orderBy('score', 'asc')->find('$game_id')->take(5)->get();
    }

    //各ランキングを表示
    public function findRankingByGameId($game_id)
    {
        $shortcut = Shortcut::find($game_id);

        return view('font.shortcut_game', compact('shortcut'));
    }

    /**
     * 削除処理
     */
    public function deleteScoreResultById($id)
    {
        return $this->destroy($id);
    }

    //shohei end

    public function scopeUserIdEqual($query, $str)
    {
        return $query->where('user_id', $str);
    }

    public function insertScore($request)
    {
        return $this->create([
            'score' => $request->score,
            'name' => $request->ranking_name,
            'prefecture_id' => $request->prefectures_select,
            'game_id' => $request->game_id
        ]);
    }
}