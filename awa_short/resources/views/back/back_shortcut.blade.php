{{-- author: kazuki sakuragi --}}

{{-- レイアウト読み込む --}}
@extends('layouts.back_base')

@section('title', 'あわショート管理画面')

{{-- メインコンテンツ --}}
@section('content')

    <div class="sidebar_main_contents">

        <div class="searchbar_wrapper">
            {{-- コンポーネント: 検索バーの読み込み --}}
            @component('components.back_searchbar')
                {{-- 新規作成ボタンを埋め込む --}}
                @slot('additional_button')
                    {{-- {{ $button }} --}}
                @endslot
            @endcomponent
            {{-- <form action="/back_shortcut/find" method="POST">
                @csrf
                ここで検索してね<input type="text" name="input" id="input">
                <input type="submit" value="find">
            </form> --}}

            {{-- 作成中 --}}
            <form action="{{ route('back.back_shortcut') }}" method="GET">
                <input type="text" name="keyword" value="{{ $keyword }}">
                <input type="submit" value="検索">
            </form>

            <a href="back_shortcut_new" onclick="return confirm('新規作成しますか？')">新規作成</a>
        </div>
        <div class='shortcut_flex_row'>
            <table border="1">
                <tr>
                    <th class="th_sticky">ID</th>
                    <th class="th_sticky">OS</th>
                    <th class="th_sticky">ソフトウェア</th>
                    <th class="th_sticky">難易度</th>
                    <th class="th_sticky">キー1</th>
                    <th class="th_sticky">キー2</th>
                    <th class="th_sticky">キー3</th>
                    <th class="th_sticky">キー4</th>
                    <th class="th_sticky">説明</th>
                    <th class="th_sticky">フラッグ</th>
                    <th class="th_sticky">使用キー</th>
                </tr>
                @foreach ($shortcuts as $shortcut)
                    {{-- <td>を表示 --}}
                    <tr>
                        <td>{{ $shortcut->id }}</td>
                        <td>{{ $shortcut->osTypes->name }}</td>
                        {{-- <td>{{ $shortcut->os_types_id }}</td> --}}
                        <td>{{ $shortcut->softwares->name }}</td>
                        {{-- <td>{{ $shortcut->software_id }}</td> --}}
                        {{-- <td>{{ $shortcut->difficulty_id }}</td> --}}
                        <td>{{ $shortcut->difficulties->difficulty_name }}</td>
                        <td>{{ $shortcut->key }}</td>
                        <td>{{ $shortcut->key2 }}</td>
                        <td>{{ $shortcut->key3 }}</td>
                        <td>{{ $shortcut->key4 }}</td>
                        <td>{{ $shortcut->description }}</td>
                        {{-- フラッグの表示か非表示かを示す --}}
                        <td>
                            @if ($shortcut->is_show == 1)
                                表示中
                            @else
                                非表示中
                            @endif
                        </td>
                        {{-- swithの前にtd書いてあげないと変になる --}}
                        <td>
                            @switch($shortcut->usage)
                                @case(0)
                                    <!-- 判定したい変数に0が格納されていた時の処理 -->
                                    使用不可
                                @break

                                @case(1)
                                    <!-- 判定したい変数に1が格納されていた時の処理 -->
                                    クイズだけ
                                @break

                                @case(2)
                                    <!-- 判定したい変数に2が格納されていた時の処理 -->
                                    キーボードだけ
                                @break

                                @default
                                    <!-- 判定したい変数に0 1 2意外が格納されていた時の処理 -->
                                    両方
                            @endswitch
                        </td>
                        <td><a
                                href="{{ route('back.back_shortcut_edit', $shortcut->id) }}
                        "class="btn btn-info">編集</a>
                        </td>
                        <form action="{{ route('back.back_shortcut_delete', $shortcut->id) }}" method="POST">
                            @csrf
                            <td>
                                <button onclick="return confirm('削除しますか？')">削除</button>
                            </td>
                        </form>
                    <tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
