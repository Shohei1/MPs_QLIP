{{-- author: kazuki sakuragi --}}

{{-- デバック用phpスクリプト --}}
{{-- @php
$data = [
    0 => [
        'user_name' => '佐藤亮一',
        'game_id' => 0,
        'score' => 50,
        'time' => '2022/07/20',
        'prefecture' => '徳島県',
    ],
    1 => [
        'user_name' => '田中謙次',
        'game_id' => 1,
        'score' => 45,
        'time' => '2022/07/21',
        'prefecture' => '徳島県以外',
    ],
    2 => [
        'user_name' => '山本太一',
        'game_id' => 2,
        'score' => 70,
        'time' => '2022/07/22',
        'prefecture' => '徳島県',
    ],
];
@endphp --}}

{{-- レイアウト読み込み --}}
@extends('layouts.back_base')

{{-- タイトル --}}
@section('title', 'あわショート管理画面')

{{-- ボタンを作るための数 --}}
{{-- @php
$count = 0;
@endphp --}}

{{-- メインコンテンツ --}}
@section('content')
    <div class="sidebar_main_contents">

        {{-- コンポーネント: 検索バーの読み込み --}}
        @component('components.back_searchbar')
            {{-- 新規作成ボタンを埋め込む --}}
            @slot('additional_button')
                {{-- {{ $button }} --}}
            @endslot
        @endcomponent
        <table border="1">
            <tr>
                <th>スコアID</th>
                <th>ユーザー名</th>
                <th>出身県</th>
                <th>ゲーム</th>
                <th>スコア</th>
                <th>プレイ日時</th>
            </tr>
            @foreach ($score_results as $score_result)
                {{-- 現在のループ数を$countに代入 --}}
                @php
                    $count = $loop->count;
                @endphp
                <tr>
                    <td>{{ $score_result->id }}</td>
                    <td>{{ $score_result->name }}</td>
                    <td>{{ $score_result->prefectures->name }}</td>
                    <td>{{ $score_result->games->name }}</td>
                    <td>{{ $score_result->score }}</td>
                    <td>{{ $score_result->created_at }}</td>
                    <form action="{{ route('back.back_score_result_delete', $score_result->id) }}" method="POST">
                        @csrf
                        <td>
                            <button onclick="return confirm('削除しますか？')">削除</button>
                        </td>
                    </form>
                </tr>
            @endforeach
        </table>
    </div>

    {{-- 編集、削除ボタンを$countの数だけ表示 --}}
    {{-- @for ($i = 0; $i < $count; $i++)
        <div>
            <a href="#">編集する</a>
            <a href="#">削除する</a>
        </div>
    @endfor --}}

@endsection
