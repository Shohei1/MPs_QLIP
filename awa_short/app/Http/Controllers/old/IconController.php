<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Icon;
use Illuminate\Http\Request;

class IconController extends Controller
{

    /**
     *  MainControllerに移行済みはコメントアウト 8/9
     */

    // public function __construct()
    // {
    //     $this->icon = new Icon();
    // }

    // // 一覧
    // public function iconShow()
    // {
    //     $icons = $this->icon->findAllIcons();

    //     return view('back.back_icon', compact('icons'));
    // }

    // // 登録画面
    // public function iconNew(Request $request)
    // {
    //     return view('back.back_icon_new');
    // }

    // // 登録処理
    // public function iconStore(Request $request)
    // {
    //     $registerIcon = $this->icon->InsertIcon($request);
    //     return redirect()->route('back.back_icon');
    // }

    // // 編集画面
    // public function iconEdit($id)
    // {
    //     $icons = Icon::find($id);

    //     return view('back.back_icon_edit', compact('icons'));
    // }


    // // 編集処理
    // public function iconUpdate(Request $request, $id)
    // {
    //     $icon = Icon::find($id);
    //     $updateIcon = $this->icon->updateIcon($request, $icon);

    //     return redirect()->route('back.back_icon');
    // }

    // // 削除処理
    // public function iconDelete($id)
    // {
    //     // 指定のIDのレコードを削除
    //     $deleteIcon = $this->icon->deleteIconById($id);
    //     // 削除したら一覧画面にリダイレクト
    //     return redirect()->route('back.back_icon');
    // }
}