{{-- author: kazuki sakuragi --}}

{{-- レイアウト読み込み --}}
@extends('layouts.back_base')

{{-- タイトル --}}
@section('title', 'あわショート管理画面')

{{-- メインコンテンツ --}}
@section('content')
    <form action="{{ route('back.back_icon_update', ['id' => $icons->id]) }}" method="POST">
        @csrf
        <table>
            <tr>
                <th>画像変更</th>
                <th>名前</th>
                <th>フラッグ</th>
            </tr>
            <tr>
                <td>
                    <input type="file" name="image" id="image" value="{{ $icons->image }}">
                </td>
                <td>
                    <input type="text" name="name" id="name" value="{{ $icons->name }}">
                </td>
                <td>
                    <select name="flag" id="flag">
                        <option value="0">表示しない</option>
                        <option value="1">表示する</option>
                    </select>
                </td>
            </tr>
        </table>
        {{-- <input type="submit" value="編集する"> --}}
        <td>
            <button type="submit" class="btn btn-success" onclick="return confirm('下記の内容でよろしいですか？')">
                {{ __('更新') }}
            </button>
        </td>
        </button>
    </form>
@endsection
