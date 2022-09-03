<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    /**
     * @author shohei yoshida
     *
     */
    protected $table = 'games';
    // テーブルに関連付ける主キー
    protected $primaryKey = 'id';

    // 登録・更新可能なカラムの指定
    protected $fillable = [
        'id',
        'name',
        'os_types_id',
        'software_id',
        'difficulty_id',
        'is_show',
        'created_at',
        'updated_at'
    ];

    // リレーションの記述：hasMany
    //osTypeとのリレーション
    public function osTypes()
    {
        return $this->belongsTo('App\Models\osType', 'os_types_id');
    }

    //softwaresとのリレーション
    public function softwares()
    {
        return $this->belongsTo('App\Models\Software', 'software_id');
    }

    //Difficultyとのリレーション
    public function difficulties()
    {
        return $this->belongsTo('App\Models\Difficulty', 'difficulty_id');
    }


    /**管理画面トップ（ゲーム）
     * 管理画面トップ用にgameテーブルから全てのデータを取得
     */
    public function findAllGames()
    {
        return Game::all();
    }

    /**ゲーム選択画面用メソッド
     * ゲームデータをソフトウェアごとにグループ化する
     */
    public function findGamesByShortcut()
    {
    }



    public function findShortcutsForGame($id)
    {
        $shortcut = Shortcut::find($id);

        return view('font.shortcut_game', compact('shortcut'));
    }

    /**
     * 更新処理
     */
    public function updateGame($request, $game)
    {
        $result = $game->fill([
            'name' => $request->name,
            'os_id' => $request->os_id,
            'software_id' => $request->software_id,
            'difficulty_id' => $request->difficulty_id,
            'is_show' => $request->is_show
        ])->save();

        return $result;
    }

    /**
     * 登録処理
     */
    public function insertGame($request)
    {
        // リクエストデータを基に管理マスターユーザーに登録する
        return $this->create([
            'name' => $request->name,
            'os_id' => $request->os_id,
            'software_id' => $request->software_id,
            'difficulty_id' => $request->difficulty_id,
        ]);
    }


    /**
     * 削除処理
     */
    public function deleteGameById($id)
    {
        return $this->destroy($id);
    }




    public function scopeSoftwareAt($query, $software_id)
    {
        if (empty($software_id)) {
            return;
        }

        //ここは絶対にarticle_category_id
        return $query->where('software_id', $software_id);
    }
}