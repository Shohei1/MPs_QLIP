{{-- レイアウト読み込み --}}
@extends('layouts.back_base')

{{-- タイトル --}}
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
            <a href="back_game_new" onclick="return confirm('新規作成しますか？')">新規作成</a>
        </div>

        <table border="1">
            <tr>
                <th class="th_sticky">ID</th>
                <th class="th_sticky">ゲーム名</th>
                <th class="th_sticky">OS</th>
                <th class="th_sticky">ソフトウェア</th>
                <th class="th_sticky">難易度</th>
                <th class="th_sticky">ゲーム説明文</th>
                <th class="th_sticky">制限時間</th>
                <th class="th_sticky">問題数</th>
                <th class="th_sticky">種類</th>
                <th class="th_sticky">フラッグ</th>
            </tr>

            @foreach ($games as $game)
                {{-- <td>を表示 --}}
                <tr>
                    <td>{{ $game->id }}</td>
                    <td>{{ $game->name }}</td>
                    <td>{{ $game->osTypes->name }}</td>
                    <td>{{ $game->softwares->name }}</td>
                    <td>{{ $game->difficulties->difficulty_name }}</td>
                    <td>{{ $game->description }}</td>
                    <td>{{ $game->time }}</td>
                    <td>{{ $game->number_of_questions }}</td>
                    {{-- ゲームの種類（キーボードかクイズか） --}}
                    <td>
                    @if ($game->type == 1)
                        キーボード
                    @elseif ($game->type == 2)
                        クイズ
                    @endif
                    </td>
                    {{-- フラッグの表示か非表示かを示す --}}
                    <td>
                    @if ($game->is_show == 1)
                        表示中
                    @else
                        非表示中
                    @endif
                    </td>

                    <td><a href="{{ route('back.back_game_edit', $game->id) }}" class="btn btn-info">編集</a></td>
                    <form action="{{ route('back.back_game_delete', $game->id) }}" method="POST">
                        @csrf
                        <td>
                            <button onclick="return confirm('削除しますか？')">削除</button>
                        </td>
                    </form>
                </tr>
            @endforeach
        </table>
    @endsection
