@extends('layouts.front_base')

@section('title', 'クイズ')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/quiz_game_play.css') }}">
@endsection

@section('main')
    <main class="main">
        <div class="game_top_space"></div>
        <div class="base_container">
            <div class="base_wrapper">
                <div id="quiz_wrapper" class="quiz_play">
                    <section class="quiz_container">
                        <!-- 開始画面領域 -->
                        <div class="quiz_start_area">
                            <h2 class="quiz_game_soft_title">{{ $game->name }}</h2>
                            <p class="birth_check_text">何県民なん？</p>
                            <div class="check_balloon"></div>
                            <img src="{{ asset('img/sudachi_hata.png') }}" alt="旗ふりおじさん" class="quiz_start_image01">
                            <img src="{{ asset('img/shoko_pc.png') }}" alt="県民" class="quiz_start_image02">
                            <img src="{{ asset('img/takenmin.png') }}" alt="他県民" class="quiz_start_image03">
                            <button class="birth_check_button01" onclick="prefecture()">県民</button>
                            <button class="birth_check_button02" onclick="other_prefecture()">他県民</button>
                            <button id="quizStart" class="quiz_start_button">GAME START</button>
                            <p class="quiz_start_message01">あんた徳島の子なん <br>一緒にがんばろな～</p>
                            <p class="quiz_start_message02">他県のあんたもせいぜい<br>練習するんでよ～</p>
                            <button id="back03" class="quiz_start_retry_button">メニューに戻る</button>
                        </div>

                        <div class="quiz_timer">
                            <p id="quiz_timer">残り時間：</p>
                        </div>

                        <!-- 問題表示領域 -->
                        <div class="question">
                            <p id="ex" class="ex">ショートカット問題ショートカット問題</p>
                        </div>

                        <!-- 選択ボタン領域 -->
                        <div class="answer">
                            <div class="answer_button_wrapper">
                                <button class="btns"></button>
                                <button class="btns"></button>
                                <button class="btns"></button>
                                <button class="btns"></button>
                                <img src="{{ asset('img/sudachi_neru5.png') }}" alt="寝るおじさん" class="question_area_image">
                            </div>
                            <div class="quiz_end_button_wrapper">
                                <button id="retry01" class="quiz_end_button">もう一回する</button>
                                <button id="back01" class="quiz_end_button">メニューに戻る</button>
                            </div>
                        </div>

                        <!-- 結果表示領域 -->
                        <div class="quiz_end">
                            <p class="quiz_end_title">結果発表</p>

                            <div class="quiz_score">
                                <p id="correct" class="quiz_correct">正解：</p>
                                <p id="rate" class="correct_rate">正解率：</p>
                            </div>
                            <div class="quiz_comment_wrapper">
                                <p id="comment" class="quiz_comment"></p>
                                <img src="{{ asset('img/sudachi_ojisan.svg') }}" alt="すだちおじさん" class="quiz_end_image">
                            </div>
                            <div class="quiz_end_button_wrapper">
                                <button id="retry02" class="quiz_end_button">もう一回する</button>
                                <button id="back02" class="quiz_end_button">メニューに戻る</button>
                            </div>

                            <div class="quiz_table_wrapper">
                                <p class="quiz_table_message">※横スクロールしてください</p>
                                <table id="result" border="1">
                                    <tr>
                                        <th>No</th>
                                        <th>問題</th>
                                        <th>あなたが選択したキー</th>
                                        <th>正解のキー</th>
                                        <th>判定</th>
                                    </tr>
                                </table>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- .base_container -->
    </main>
@endsection

@section('audio')
    <div id="audio_box" class="audio_box">
        <audio type="audio/mpeg" controls autoplay loop="metadata" id="audio">
            <source src="{{ asset('audio/awaodori_for_game.mp3') }}" type="audio/mp3" />
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

@section('js')
    <script>
        const question = @json($shortcuts);
    </script>
    <script src="{{ asset('js/quiz_game_play.js') }}"></script>
@endsection
