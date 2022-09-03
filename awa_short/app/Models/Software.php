<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    use HasFactory;

    // added: sakuragi
    protected $table = 'softwares';

    /**
     * @author shohei yoshida
     *
     */
    // テーブルに関連付ける主キー
    protected $primaryKey = 'id';

    // 登録・更新可能なカラムの指定
    protected $fillable = [
        'id',
        'name',
        'is_show',
        'created_at',
        'updated_at'
    ];

    // リレーションの記述：hasMany
    // public function Shortcuts()
    // {
    //     return $this->hasMany('App\Models\Shortcut', 'software_id');
    // }


    /**管理画面トップ（ショートかっと）
     * 管理画面トップ用にshortcutテーブルから全てのデータを取得
     */
    public function findAllSoftwares()
    {
        return Software::all();
    }

    /**
     * 登録処理
     */
    public function insertSoftware($request)
    {
        // リクエストデータを基に管理マスターユーザーに登録する
        return $this->create([
            'name' => $request->name,
        ]);
    }

    /**
     * 更新処理
     */
    public function updateSoftware($request, $software)
    {
        $result = $software->fill([
            'name' => $request->name,
            'is_show' => $request->is_show,
        ])->save();

        return $result;
    }

    /**
     * 削除処理
     */
    public function deleteSoftwareById($id)
    {
        return $this->destroy($id);
    }



    public function getLists()
    {
        $softwares = Software::orderBy('id', 'asc')->pluck('name', 'id');

        return $softwares;
    }

    public function shortcuts_win()
    {
        $obj = $this->hasMany('App\Models\Shortcut', 'software_id')->where('os_types_id', 1);
        return $obj;
    }
    public function shortcuts_mac()
    {
        $obj = $this->hasMany('App\Models\Shortcut', 'software_id')->where('os_types_id', 2);
        return $obj;
    }
}