@extends('layouts.front_base')

@section('title', 'ランキング詳細')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/shortcut_game.css') }}">
@endsection

@section('main')

    {{-- 開発用コマンド --}}
    {{-- @php dd($shortcuts[0]) @endphp --}}
    @php
    echo '<pre>';
    var_dump($score_results);
    echo '</pre>';
    @endphp
    {{-- @php dump($games) @endphp --}}
    {{-- @php print_r($games) @endphp --}}
    <main class="main">

        <span class="spacer_sm"></span>
        <div class="base_container">
            <div class="base_wrapper">
                <div class="ranking_wrapper">
                    <img class="ranking_wrapper_title_image" src="../img/sudachi_hata.png" alt="" srcset="">
                    <div class="ranking_title">
                        <p class="ranking_title_main">ランキング</p>
                        <p class="ranking_title_sub">他の人のスコアもチェックしいよ～</p>
                    </div>
                    <div class="ranking_box">
                        <p class="ranking_table_row">{{ $game_id }}</p>
                        <table class="ranking_table" border="1">
                            <tr class="ranking_table_row ranking_table_row01">
                                <th>順位</th>
                                <th>お名前</th>
                                <th>出身地</th>
                                <th>スコア</th>
                            </tr>

                            @foreach ($data as $datas)

                                <tr class="ranking_table_row ranking_table_row02">
                                    {{-- <td>{{ $data }}</td> --}}
                                    {{-- <td>
                                        @for($i = 1; $i < {{ $data->count() }}; $i++)
                                        {$i}
                                        @endfor
                                    </td> --}}
                                    <td>{{ $loop->iteration }}位：</td>
                                    <td>{{ $datas->name }}</td>
                                    <td>{{ $datas->prefectures->name }}</td>
                                    <td>{{ $datas->score }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
                <div class="base_wrapper">
                    <div class="shortcut_game_buttons">
                    <button class="shortcut_game_button" onclick="retry()">リトライ</button>
                    <button class="shortcut_game_button" onclick="location.href=`/shortcut_select`">メニューに戻る</button>
                </div>
            </div>
        </div>
        <!-- .base_container -->
    </main>
@endsection
