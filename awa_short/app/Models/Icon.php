<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    use HasFactory;

    // 関連付けるテーブル
    protected $table = 'icons';

    // テーブルに関連付ける主キー
    protected $primaryKey = 'id';

    // 登録更新するカラム指定
    protected $fillable = [
        'id',
        'image',
        'name',
        'created_at',
        'updated_at',
        'is_show'
    ];

    // 一覧画面表示用にテーブルから全てのデータを取得
    public function findAllIcons()
    {
        return Icon::all();
    }

    // 登録処理
    public function InsertIcon($request)
    {
        return $this->create([
            'image' => $request->image,
            'name' => $request->name,
        ]);
    }

    // 更新処理
    public function updateIcon($request, $icon)
    {
        $result = $icon->fill([
            'image' => $request->image,
            'name' => $request->name,
            'is_show' => $request->is_show,
        ])->save();

        return $result;
    }

    // 削除処理
    public function deleteIconById($id)
    {
        return $this->destroy($id);
    }
}
