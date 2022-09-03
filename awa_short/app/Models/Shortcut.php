<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shortcut extends Model
{
    use HasFactory;

    /**
     * @author shohei yoshida
     *
     */
    protected $table = 'shortcuts';
    // テーブルに関連付ける主キー
    protected $primaryKey = 'id';

    // 登録・更新可能なカラムの指定
    protected $fillable = [
        'id',
        'os_types_id',
        'software_id',
        'difficulty_id',
        'key',
        'key2',
        'key3',
        'key4',
        'description',
        'is_show',
        'usage',
        'created_at',
        'updated_at'
    ];

    // リレーションの記述：hasMany
    //OsTypeとのリレーション
    // public function osTypes()
    // {
    //     return $this->belongsTo('App\Models\OsType', 'os_types_id');
    // }
    public function osTypes()
    {
        return $this->belongsTo(OsType::class, 'os_types_id');
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

    /**
     * @author shohei
     * フロントショートカットリストページトップ
     * 最初の画面ではMacとWindowsのショートカットを見せる
     */

    // macのショートカットだけ撮ってくるメソッド
    public function findAllWindowsShortcuts()
    {
        return Shortcut::where('os_types_id', 1)->take(20)->get();
    }

    // macのショートカットだけ撮ってくるメソッド
    public function findAllMacShortcuts()
    {
        return Shortcut::where('os_types_id', 2)->take(10)->get();
    }

    // ショートカットリストページ用ににスコープ
    public function scopeSoftwareAt($query, $software_id)
    {
        if (empty($software_id)) {
            return;
        }

        return $query->where('software_id', $software_id);
    }

    public function scopeOsAt($query, $os_types_id)
    {
        if (empty($os_types_id)) {
            return;
        }

        return $query->where('os_types_id', $os_types_id);
    }

    /**管理画面トップ（ショートかっと）
     * 管理画面トップ用にshortcutテーブルから全てのデータを取得
     */
    public function findAllShortcuts()
    {
        return Shortcut::all();
    }

    // データを10個だけ取得
    public function findSomeShortcuts()
    {
        return Shortcut::take(50)->get();
    }

    /**
     * 登録処理
     */
    public function insertShortcut($request)
    {
        // リクエストデータを基に管理マスターユーザーに登録する
        return $this->create([

            'os_types_id' => $request->os_type_id,
            'software_id' => $request->software_id,
            'difficulty_id' => $request->difficulty_id,
            'key' => $request->key,
            'key2' => $request->key2,
            'key3' => $request->key3,
            'key4' => $request->key4,
            'description' => $request->description,
            'is_show' => $request->is_show,
            'usage' => $request->usage
        ]);
    }
    /**
     * 更新処理
     */
    public function updateShortcut($request, $shortcut)
    {
        $result = $shortcut->fill([
            'os_types_id' => $request->os_types_id,
            'software_id' => $request->software_id,
            'difficulty_id' => $request->difficulty_id,
            'key' => $request->key,
            'key2' => $request->key2,
            'key3' => $request->key3,
            'key4' => $request->key4,
            'description' => $request->description,
            'is_show' => $request->is_show,
            'usage' => $request->usage
        ])->save();

        return $result;
    }

    /**
     * 削除処理
     */
    public function deleteShortCutById($id)
    {
        return $this->destroy($id);
    }



    //スコープの記述
    //whereと使うとこの処理を書いてる
    public function scopeIdEqual($query, $str)
    {
        return $query->where('id', $str);
    }

    public function scopeOsTypesIdEqual($query, $str)
    {
        return $query->where('os_types_id', $str);
    }

    public function scopeSoftwareIdEqual($query, $str)
    {
        return $query->where('software_id', $str);
    }

    public function scopeDifficultyIdEqual($query, $str)
    {
        return $query->where('difficulty_id', $str);
    }

    public function scopeKeyEqual($query, $str)
    {
        return $query->where('key', $str);
    }

    public function scopeDescriptionEqual($query, $str)
    {
        return $query->where('description', $str);
    }

    //author shohei 終了

    // author: sakuragi
    public function scopeUsageEqual($query, $type)
    {
        if ($type === 1) {
            return $query->where('usage', 2)->orWhere('usage', 3);
        } elseif ($type === 2) {
            return $query->where('usage', 1)->orWhere('usage', 3);
        }
    }
}