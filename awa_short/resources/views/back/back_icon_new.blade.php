{{-- author: kazuki sakuragi --}}

{{-- レイアウト読み込み --}}
@extends('layouts.back_base')

{{-- タイトル --}}
@section('title', 'あわショート管理画面')

{{-- メインコンテンツ --}}
@section('content')
    <div class="sidebar_main_contents">
        <form action="{{ route('back.back_icon_store') }}" method="POST">
            @csrf
            <table>
                <tr>
                    <th>アイコン</th>
                    <th>名前</th>
                </tr>
                <tr>
                    <td>
                        <input type="file" name="image" id="image">
                    </td>
                    <td>
                        <input type="text" name="name" id="name">
                    </td>
                </tr>
            </table>
            <button type="submit" class="btn btn-success" onclick="return confirm('下記の内容でよろしいですか？')">
                {{ __('新規追加') }}
            </button>
        </form>
    </div>
@endsection
