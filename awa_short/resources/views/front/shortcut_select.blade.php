@extends('layouts.front_base')

@section('title', 'ショートカットバトル！')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/shortcut_select.css') }}">
@endsection


@section('main')

    {{-- @php
    var_dump($os_types[0])
@endphp --}}

    <main class="main">
        <div class="game_top_space">
        </div>
        <span class="spacer_sm"></span>
        <div class="base_container">
            <div class="base_wrapper">
                <h3 class="ranking_title">ゲームセレクト</h3>

                <!-- ここから画像下のコンテンツ作成開始 -->
                <div class="sidebar_wrapper">
                    <div class="sidebar_main_contents">
                        <section class="game_select">
                            <div class="tab_wrap">
                                <input id="tab1" class="tab_switch" checked="checked" name="tab" type="radio" />
                                <label class="tab_label" for="tab1">Windows/Mac</label>

                                {{-- <input id="tab2" class="tab_switch" name="tab" type="radio" />
                                <label class="tab_label" for="tab2">Mac</label> --}}
                                <div class="tab_body">

                                    <div class="Windows">
                                        {{-- (＊切り替わり確認のための表示です１) --}}
                                        <div class="select_area_wrapper" id="1">
                                            <div class="soft_area">
                                                <h3 class="soft_title soft_title_word" id="windows_os">Windows全般</h3>
                                                <div class="select_inner_area">
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">初&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/5">
                                                                <button
                                                                    class="select_button select_button_bronze">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/1">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_bronze">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">中&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/6">
                                                                <button
                                                                    class="select_button select_button_silver">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/2">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_silver">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">上&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/7">
                                                                <button
                                                                    class="select_button select_button_gold">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/3">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_gold">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">
                                                            ランダム
                                                        </h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/8">
                                                                <button
                                                                    class="select_button
                                                                        select_button_random">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/4">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_random">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="select_area_wrapper" id="2">
                                            <div class="soft_area">
                                                <h3 class="soft_title soft_title_Excel" id="windows_vscode">Windows VSCode
                                                </h3>
                                                <div class="select_inner_area">
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">
                                                            ランダム
                                                        </h4>
                                                        <div class="selectsoft_button_wrapper">

                                                            <a class="game_select_button_anchor" href="quiz_game_play/10">

                                                                <button
                                                                    class="select_button
                                                                        select_button_random">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/9">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_random">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="select_area_wrapper" id="3">
                                            <div class="soft_area">
                                                <h3 class="soft_title soft_title_word" id="windows_photoshop">Windows
                                                    Photoshop</h3>
                                                <div class="select_inner_area">
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">初&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/55">

                                                                <button
                                                                    class="select_button select_button_bronze">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/51">

                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_bronze">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">中&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">

                                                            <a class="game_select_button_anchor" href="quiz_game_play/56">

                                                                <button
                                                                    class="select_button select_button_silver">クイズ</button>
                                                            </a>


                                                            <a class="game_select_button_anchor" href="shortcut_game/52">

                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_silver">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">上&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">

                                                            <a class="game_select_button_anchor" href="quiz_game_play/57">

                                                                <button
                                                                    class="select_button select_button_gold">クイズ</button>
                                                            </a>


                                                            <a class="game_select_button_anchor" href="shortcut_game/53">

                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_gold">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">
                                                            ランダム
                                                        </h4>
                                                        <div class="selectsoft_button_wrapper">

                                                            <a class="game_select_button_anchor" href="quiz_game_play/58">

                                                                <button
                                                                    class="select_button
                                                                        select_button_random">クイズ</button>
                                                            </a>


                                                            <a class="game_select_button_anchor" href="shortcut_game/54">

                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_random">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="select_area_wrapper" id="4">
                                            <div class="soft_area">
                                                <h3 class="soft_title soft_title_word" id="windows_Illustrator">Windows
                                                    Illustrator</h3>
                                                <div class="select_inner_area">
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">初&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/47">

                                                                <button
                                                                    class="select_button select_button_bronze">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/43">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_bronze">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">中&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/48">
                                                                <button
                                                                    class="select_button select_button_silver">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/44">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_silver">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">上&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/49">
                                                                <button
                                                                    class="select_button select_button_gold">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/45">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_gold">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">
                                                            ランダム
                                                        </h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/50">
                                                                <button
                                                                    class="select_button
                                                                        select_button_random">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/46">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_random">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="select_area_wrapper" id="5">
                                            <div class="soft_area">
                                                <h3 class="soft_title soft_title_word" id="windows_PowerPoint">Windows
                                                    PowerPoint</h3>
                                                <div class="select_inner_area">
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">初&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/39">
                                                                <button
                                                                    class="select_button select_button_bronze">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/35">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_bronze">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">中&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/40">
                                                                <button
                                                                    class="select_button select_button_silver">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/36">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_silver">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">上&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/41">
                                                                <button
                                                                    class="select_button select_button_gold">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/37">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_gold">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">
                                                            ランダム
                                                        </h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/42">
                                                                <button
                                                                    class="select_button
                                                                        select_button_random">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/38">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_random">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="select_area_wrapper" id="6">
                                            <div class="soft_area">
                                                <h3 class="soft_title soft_title_word" id="windows_Excel">Windows Excel
                                                </h3>
                                                <div class="select_inner_area">
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">初&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/31">
                                                                <button
                                                                    class="select_button select_button_bronze">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/27">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_bronze">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">中&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/32">
                                                                <button
                                                                    class="select_button select_button_silver">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/28">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_silver">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">上&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/33">
                                                                <button
                                                                    class="select_button select_button_gold">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/29">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_gold">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">
                                                            ランダム
                                                        </h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/34">
                                                                <button
                                                                    class="select_button
                                                                        select_button_random">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/30">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_random">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="select_area_wrapper" id="7">
                                            <div class="soft_area">
                                                <h3 class="soft_title soft_title_word" id="windows_Word">Windows Word</h3>
                                                <div class="select_inner_area">
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">初&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/23">
                                                                <button
                                                                    class="select_button select_button_bronze">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/19">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_bronze">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">中&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/24">
                                                                <button
                                                                    class="select_button select_button_silver">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/20">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_silver">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">上&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/25">
                                                                <button
                                                                    class="select_button select_button_gold">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/21">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_gold">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">
                                                            ランダム
                                                        </h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/26">
                                                                <button
                                                                    class="select_button
                                                                        select_button_random">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/22">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_random">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="select_area_wrapper" id="8">
                                            <div class="soft_area">
                                                <h3 class="soft_title soft_title_word" id="windows_Gmail">Windows Gmail
                                                </h3>
                                                <div class="select_inner_area">
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">初&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/63">
                                                                <button
                                                                    class="select_button select_button_bronze">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/59">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_bronze">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">中&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/64">
                                                                <button
                                                                    class="select_button select_button_silver">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/60">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_silver">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">上&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/65">
                                                                <button
                                                                    class="select_button select_button_gold">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/61">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_gold">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">
                                                            ランダム
                                                        </h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/66">
                                                                <button
                                                                    class="select_button
                                                                        select_button_random">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/62">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_random">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="select_area_wrapper" id="9">
                                            <div class="soft_area">
                                                <h3 class="soft_title soft_title_word" id="windows_Outlook">Windows
                                                    Outlook</h3>
                                                <div class="select_inner_area">
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">初&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/15">
                                                                <button
                                                                    class="select_button select_button_bronze">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/19">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_bronze">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">中&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/16">
                                                                <button
                                                                    class="select_button select_button_silver">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/20">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_silver">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">上&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/17">
                                                                <button
                                                                    class="select_button select_button_gold">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/21">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_gold">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">
                                                            ランダム
                                                        </h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/18">
                                                                <button
                                                                    class="select_button
                                                                        select_button_random">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/22">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_random">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="select_area_wrapper" id="10">
                                            <div class="soft_area">
                                                <h3 class="soft_title soft_title_word" id="mac_os">Mac全般</h3>
                                                <div class="select_inner_area">
                                                    <div class="soft_group">
                                                        <h4 class="select_class" id="mac_os">初&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="/quiz_game_play/">
                                                                <button
                                                                    class="select_button select_button_bronze">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="/shortcut_game/">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_bronze">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">中&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="/quiz_game_play/">
                                                                <button
                                                                    class="select_button select_button_silver">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="/shortcut_game/">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_silver">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">上&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="/quiz_game_play/">
                                                                <button
                                                                    class="select_button select_button_gold">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="/shortcut_game/">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_gold">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">
                                                            ランダム
                                                        </h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="/quiz_game_play/">
                                                                <button
                                                                    class="select_button
                                                                        select_button_random">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="/shortcut_game/">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_random">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="select_area_wrapper" id="11">
                                            <div class="soft_area">
                                                <h3 class="soft_title soft_title_word" id="mac_powerpoint">Mac PowerPoint
                                                </h3>
                                                <div class="select_inner_area">
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">初&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/87">
                                                                <button
                                                                    class="select_button select_button_bronze">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/83">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_bronze">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">中&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/88">
                                                                <button
                                                                    class="select_button select_button_silver">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/84">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_silver">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">上&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/89">
                                                                <button
                                                                    class="select_button select_button_gold">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/85">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_gold">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">
                                                            ランダム
                                                        </h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/90">
                                                                <button
                                                                    class="select_button
                                                                        select_button_random">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/86">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_random">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="select_area_wrapper" id="12">
                                            <div class="soft_area">
                                                <h3 class="soft_title soft_title_word" id="mac_Excel">Mac Excel</h3>
                                                <div class="select_inner_area">
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">初&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/71">
                                                                <button
                                                                    class="select_button select_button_bronze">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/67">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_bronze">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">中&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/72">
                                                                <button
                                                                    class="select_button select_button_silver">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/68">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_silver">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">上&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/73">
                                                                <button
                                                                    class="select_button select_button_gold">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/69">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_gold">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">
                                                            ランダム
                                                        </h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/74">
                                                                <button
                                                                    class="select_button
                                                                        select_button_random">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/70">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_random">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="select_area_wrapper" id="13">
                                            <div class="soft_area">
                                                <h3 class="soft_title soft_title_word" id="mac_Word">Mac Word</h3>
                                                <div class="select_inner_area">
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">初&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/79">
                                                                <button
                                                                    class="select_button select_button_bronze">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/75">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_bronze">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">中&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/80">
                                                                <button
                                                                    class="select_button select_button_silver">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/76">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_silver">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">上&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/81">
                                                                <button
                                                                    class="select_button select_button_gold">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/77">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_gold">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">
                                                            ランダム
                                                        </h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="quiz_game_play/82">
                                                                <button
                                                                    class="select_button
                                                                        select_button_random">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor" href="shortcut_game/78">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_random">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Mac">(＊切り替わり確認のための表示です２)
                                        <div class="select_area_wrapper">
                                            <div class="soft_area">
                                                <h3 class="soft_title soft_title_word">
                                                    word</h3>
                                                <div class="select_inner_area">
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">
                                                            初&nbsp;級
                                                        </h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor"
                                                                href="shortcut_game/2/7/1/2">
                                                                <button
                                                                    class="select_button
                                                                        select_button_bronze">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor"
                                                                href="shortcut_game/2/7/1/1">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_bronze">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">
                                                            中&nbsp;級
                                                        </h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor"
                                                                href="shortcut_game/2/7/2/2">
                                                                <button
                                                                    class="select_button
                                                                        select_button_silver">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor"
                                                                href="shortcut_game/2/7/2/1">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_silver">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">
                                                            上&nbsp;級
                                                        </h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor"
                                                                href="shortcut_game/2/7/3/2">
                                                                <button
                                                                    class="select_button
                                                                        select_button_gold">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor"
                                                                href="shortcut_game/2/7/3/1">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_gold">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">
                                                            ランダム
                                                        </h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor"
                                                                href="shortcut_game/2/7/4/2">
                                                                <button
                                                                    class="select_button
                                                                        select_button_random">クイズ</button>
                                                            </a>

                                                            <a class="game_select_button_anchor"
                                                                href="shortcut_game/2/7/4/1">
                                                                <button
                                                                    class="select_button shortcut_select_button
                                                                        select_button_random">キー入力</button>
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="sidebar">
                        <p class="sidebar_title">
                            Category
                        </p>

                        <div class="sidebar_wrapper">
                            <div class="sidebar_category_wrapper">
                                <p class="shortcutlist_sidebar_category_title">Windows</p>
                                <ul class="shortcutlist_sidebar_list">
                                    <a href="#windows_os">
                                        <li class="shortcutlist_sidebar_list_li" id="1">Windows全般</li>
                                    </a>
                                    <a href="#windows_vscode">
                                        <li class="shortcutlist_sidebar_list_li" id="2">VS Code</li>
                                    </a>
                                    <a href="#windows_photoshop">
                                        <li class="shortcutlist_sidebar_list_li" id="3">Photoshop</li>
                                    </a>
                                    <a href="#windows_Illustrator">
                                        <li class="shortcutlist_sidebar_list_li" id="4">Illustrator</li>
                                    </a>
                                    <a href="#windows_PowerPoint">
                                        <li class="shortcutlist_sidebar_list_li" id="5">PowerPoint</li>
                                    </a>
                                    <a href="#windows_Excel">
                                        <li class="shortcutlist_sidebar_list_li" id="6">Excel</li>
                                    </a>
                                    <a href="#windows_Word">
                                        <li class="shortcutlist_sidebar_list_li" id="7">Word</li>
                                    </a>
                                    <a href="#windows_Gmail">
                                        <li class="shortcutlist_sidebar_list_li" id="8">Gmail</li>
                                    </a>
                                    <a href="#windows_Outlook">
                                        <li class="shortcutlist_sidebar_list_li" id="9">Outlook</li>
                                    </a>
                                </ul>
                            </div>
                            <div class="sidebar_category_wrapper">
                                <p class="shortcutlist_sidebar_category_title">Mac</p>
                                <ul class="shortcutlist_sidebar_list">
                                    {{-- <a href="#mac_os">
                                        <li class="shortcutlist_sidebar_list_li" id="10">Mac全般</li>
                                    </a> --}}
                                    <a href="#mac_powerpoint">
                                        <li class="shortcutlist_sidebar_list_li" id="11">PowerPoint</li>
                                    </a>
                                    <a href="#mac_Excel">
                                        <li class="shortcutlist_sidebar_list_li" id="12">Excel</li>
                                    </a>
                                    <a href="#mac_Word">
                                        <li class="shortcutlist_sidebar_list_li" id="13">Word</li>
                                    </a>
                            </div>

                        </div>
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
