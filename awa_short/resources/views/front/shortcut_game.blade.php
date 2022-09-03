@extends('layouts.front_base')

@section('title', 'ショートカットバトル！')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/shortcut_game.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/quiz_game_play.css') }}"> --}}
@endsection


@section('main')
    {{-- 開発用コマンド --}}
    <main class="main">
        <div class="game_top_space"></div>
        <span class="spacer_sm"></span>
        <div class="base_container">
            <div class="base_wrapper">
                <!-- ここから画像下のコンテンツ作成開始 -->
                <!-- この部分がゲーム画面です -->
                <div class="shortcut_game_main_page">
                    <!-- <img src="../img/shoko_zenshin.png" alt="shoko" class="shortcut_game_shoko_image"> -->
                    <!-- スタート画面 -->
                    <div id="shortcut_game_start_window" class="shortcut_game_window_size">

                        <div class="quiz_start_area">
                            <div class="shortcut_game_window_text_box">
                                <h2 class="shortcut_game_title">{{ $game->name }}
                                </h2>
                            </div>

                            <p class="birth_check_text">何県民なん？</p>
                            <div class="check_balloon"></div>
                            <img src="{{ asset('img/sudachi_hata.png') }}" alt="旗ふりおじさん" class="quiz_start_image01">
                            <img src="{{ asset('img/shoko_pc.png') }}" alt="県民" class="quiz_start_image02">
                            <img src="{{ asset('img/takenmin.png') }}" alt="他県民" class="quiz_start_image03">




                            <input type="radio" id="birth_check_button01" class="shortcut_game_input"
                                onclick="prefecture()" value="tokushima" checked><label class="birth_check_button01"
                                for="birth_check_button01">徳島県民</label>

                            <input type="radio" id="birth_check_button02" class="shortcut_game_input"
                                onclick="other_prefecture()" value="other" checked><label class="birth_check_button02"
                                for="birth_check_button02">他県民</label>
                            {{-- <button class="birth_check_button02" onclick="other_prefecture()">他県民</button> --}}

                            <button id="quizStart" class="quiz_start_button" onclick="start()">GAME START</button>
                            <p class="quiz_start_message01">あんた徳島の子なん <br>一緒にがんばろな～</p>
                            <p class="quiz_start_message02">他県のあんたもせいぜい<br>練習するんでよ～</p>

                        </div>

                    </div>

                    <!-- ゲーム本体画面 -->
                    <div id="shortcut_game_question_window" class="shortcut_game_window_size">
                        <div class="shortcut_game_question_box">
                            <p class="shortcut_game_name">{{ $game->name }}</p>
                            <p id="shortcut_game_timer">残り？秒</p>
                            <h2 id="shortcut_game_question">Q.</h2>
                            <h3 class="shortcut_game_your_answer_title">あなたの回答</h3>
                            <p id="shortcut_game_your_answer">？？？</p>
                        </div>

                    </div>
                    <div id="shortcut_game_result_window" class="shortcut_game_window_size">
                        <div class="shortcut_game_your_score_box">
                            <h2 id="shortcut_game_your_score">得点</h2>
                            <h3 id="shortcut_game_expression_word">一言</h3>
                        </div>
                        <table id="shortcut_game_result_table" class="shortcut_game_result_table">
                            <tr>
                                <th>No.</th>
                                <th>問題</th>
                                <th>あなたが選択したキー</th>
                                <th>正解のキー</th>
                                <th>判定</th>
                            </tr>
                        </table>
                        {{-- <h2 id="shortcut_game_your_score">得点</h2>
                        <h3 id="shortcut_game_expression_word">一言</h3> --}}
                        <div class="shortcut_game_buttons">

                            <button class="shortcut_game_button" onclick="ranking(score)">ランキングに登録</button>
                        </div>
                    </div>
                    <div id="shortcut_game_add_ranking_window" class="shortcut_game_window_size">
                        <div class="shortcut_game_ranking_title_box">
                            <h2 class="shortcut_game_ranking_title">ランキング入力フォーム</h2>
                            <form action="/result" method="get" id="shortcut_game_ranking_form">
                                <input type="hidden" value="" name="score" id="score"
                                    class="shortcut_game_input">
                                <input type="hidden" value="" name="game_id" id="game_id"
                                    class="shortcut_game_input">
                                <table class="shortcut_game_ranking_form_table">
                                    <tr class="shortcut_game_ranking_form_tr">
                                        <th class="shortcut_game_ranking_form_th" id="prefectures_question">何県民なん？</th>
                                        <th>
                                            <select name="prefectures_select" id="prefectures_option"
                                                class="prefectures_option ranking_form_input" size="1">
                                                <option value="1" style="display: none">徳島県</option>
                                                <option value="2">北海道</option>
                                                <option value="3">青森県</option>
                                                <option value="4">岩手県</option>
                                                <option value="5">宮城県</option>
                                                <option value="6">秋田県</option>
                                                <option value="7">山形県</option>
                                                <option value="8">福島県</option>
                                                <option value="9">茨城県</option>
                                                <option value="10">栃木県</option>
                                                <option value="11">群馬県</option>
                                                <option value="12">埼玉県</option>
                                                <option value="13">千葉県</option>
                                                <option value="14">東京都</option>
                                                <option value="15">神奈川県</option>
                                                <option value="16">新潟県</option>
                                                <option value="17">富山県</option>
                                                <option value="18">石川県</option>
                                                <option value="19">福井県</option>
                                                <option value="20">山梨県</option>
                                                <option value="Nagano">長野県</option>
                                                <option value="22">岐阜県</option>
                                                <option value="23">静岡県</option>
                                                <option value="24">愛知県</option>
                                                <option value="25">三重県</option>
                                                <option value="26">滋賀県</option>
                                                <option value="27">京都府</option>
                                                <option value="28">大阪府</option>
                                                <option value="29">兵庫県</option>
                                                <option value="30">奈良県</option>
                                                <option value="31">和歌山県</option>
                                                <option value="32">鳥取県</option>
                                                <option value="33">島根県</option>
                                                <option value="34">岡山県</option>
                                                <option value="35">広島県</option>
                                                <option value="36">山口県</option>
                                                <option value="37">香川県</option>
                                                <option value="38">愛媛県</option>
                                                <option value="39">高知県</option>
                                                <option value="40">福岡県</option>
                                                <option value="41">佐賀県</option>
                                                <option value="42">長崎県</option>
                                                <option value="43">熊本県</option>
                                                <option value="44">大分県</option>
                                                <option value="45">宮崎県</option>
                                                <option value="46">鹿児島県</option>
                                                <option value="47">沖縄県</option>
                                            </select>
                                        </th>
                                    </tr>
                                    <tr class="shortcut_game_ranking_form_tr">
                                        <th class="shortcut_game_ranking_form_th">
                                            あんた、なんていう名前なん？
                                        </th>
                                        <th class="shortcut_game_ranking_form_th">
                                            <input type="text" name="ranking_name" id="ranking_name"
                                                class="ranking_form_input" placeholder="徳島太郎" maxlength="15" required>
                                        </th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th><input type="hidden" name="game_score" id="game_score"
                                                class="shortcut_game_input"></th>
                                    </tr>
                                </table>
                                <div class="shortcut_game_buttons">
                                    <button type="submit" class="shortcut_game_button">送信</button>
                                </div>
                            </form>
                        </div>
                        <!-- <h2 id="shortcut_game_send_message"></h2> -->
                    </div>
                    <!-- <img src="../img/takenmin02.png" alt="他県民" class="takenmin_human"> -->
                </div>
                <!-- <p>「Ctrl+T」は押さんときよ？大変なことになるで？</p> -->
                <!-- ゲーム画面おわり -->
            </div>
        </div>
        <!-- .base_container -->
        <div class="base_container">
            <div class="shortcut_game_buttons">
                <button class="shortcut_game_button" onclick="retry()">リトライ</button>
                <button class="shortcut_game_button" href="shortcut_select">メニューに戻る</button>
            </div>

            <div class="ranking_wrapper">
                <img class="ranking_wrapper_title_image" src="{{ asset('img/ranking_sudachi.png') }}" alt=""
                    srcset="">
                <div class="ranking_title">

                    <p class="ranking_title_main">ランキング</p>
                    <p class="ranking_title_sub">他の人のスコアもチェックしいよ～</p>
                </div>
                <div class="ranking_box">

                    <table class="ranking_table" border="1">
                        <tr class="ranking_table_row ranking_table_row01">
                            <th>順位</th>
                            <th>お名前</th>
                            <th>出身地</th>
                            <th>スコア</th>
                        </tr>
                        {{-- <h3>{{ $game_id }}</h3> --}}
                        @foreach ($data as $datas)
                            <tr class="ranking_table_row ranking_table_row02">

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
        // 問題をphpから受け取る
        const question = @json($shortcuts);
        const game_id = @json($game_id);
    </script>
    <script src="{{ asset('js/shortcut_game_jc.js') }}"></script>
@endsection
