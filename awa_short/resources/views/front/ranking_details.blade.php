@extends('layouts.front_base')

@section('title', 'ランキング詳細')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/shortcut_game.css') }}">
@endsection

@section('main')
    <main class="main">

        <span class="spacer_sm"></span>
        <div class="base_container">
            <div class="base_wrapper">
                <div class="ranking_wrapper">
                    <img class="ranking_wrapper_title_image" src="{{ asset('img/ranking_sudachi.png') }}" alt=""
                        srcset="">
                    <div class="ranking_title">

                        <p class="ranking_title_main">ランキング</p>
                        <p class="ranking_title_sub">他の人のスコアもチェックしいよ～</p>
                    </div>
                    <div class="ranking_box">

<h3 class="ranking_box_h3">{{ $game[0]->name }}</h3>

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

                            {{-- @foreach ($data as $data)

{{ $data }}

@endforeach --}}

                            {{-- {{ $data }} --}}
                        </table>
                    </div>
                </div>
            </div>
            <div class="base_wrapper">
                            <div class="shortcut_game_buttons">
                    <button class="shortcut_game_button" onclick="location.href=`/shortcut_select`">メニューに戻る</button>
                </div>
            </div>
        </div>
        <!-- .base_container -->
    </main>
@endsection

@section('audio')
    <div id="audio_box" class="audio_box">
        <audio type="audio/mpeg" controls autoplay loop="metadata" id="audio">
            <source src="{{ asset('audio/syamisen.mp3') }}" type="audio/mp3" />
        </audio>
        {{-- <div id="sound" class="sound"> --}}
        <img src="{{ asset('img/sound.png') }}" width="100" class="sound">

        {{-- </div> --}}
        <div class="sound_switch_box">
            <div id="ON" class="sound_switch ON"><img src="{{ asset('img/on_sound.png') }}" width="40">
            </div>
            <div id="OFF" class="sound_switch OFF"><img src="{{ asset('img/off_sound-5.png') }}" width="40">
            </div>
        </div>
    </div>
@endsection
