@extends('layouts.front_base')

@section('title', 'ショートカットバトル！')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/shortcut_select_new.css') }}">

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
                    <h3 class="ranking_title">練習したいゲームを<br class="sp_only">選ぶんじょ〜！</h3>

                    <div class="sidebar_wrapper">
                        <div class="sidebar_main_contents">
                            <section class="game_select">
                                <!-- タブの表記 -->
                                <div class="tab_wrap">
                                    <input id="tab1" class="tab_switch" checked="checked" name="tab" type="radio" />
                                    <label class="tab_label" for="tab1">Windows</label>

                                    <input id="tab2" class="tab_switch" name="tab" type="radio" />
                                    <label class="tab_label" for="tab2">Mac</label>
                                    <!-- タブ表記ここまで -->

                                    <!-- タブ全体の中身ここから -->
                                    <div class="tab_body">
                                        <!-- Windowタブの中身ここから -->
                                        <div class="Windows">(test1)
                                            <div class="soft_area">
                                                <!-- キー入力カード -->
                                                <div class="soft_wrapper">
                                                    <div class="select_soft_container keyboard_card" data-title="キーボード練習">
                                                        <div class="select_soft_wrap">
                                                            <p class="soft_title soft_title_word">word</p>
                                                            <p class="soft_title">初級</p>
                                                        </div>
                                                        <div class="select_inner_area">
                                                            <div class="soft_group">
                                                                <p class="explanation_text">
                                                                    wordで使える<br class="sp_only">ショートカットキーを
                                                                    <br class="pc_only"><br class="sp_only">練習するんじょ〜！
                                                                </p>
                                                                <div class="selectsoft_button_wrapper">
                                                                    <a class="game_select_button_anchor" href="">
                                                                        <button class="select_button select_button_bronze">スタート</button>
                                                                    </a>
                                                                    <!-- <a class="game_select_button_anchor" href="">
                                                                        <button class="select_button shortcut_select_button
                                                                        select_button_bronze">ランキング
                                                                        </button>
                                                                    </a> -->
                                                                    <!-- <a class="game_select_button_anchor" href="">
                                                                        <button class="select_button shortcut_select_button
                                                                        select_button_random">ランダム
                                                                        </button>
                                                                    </a> -->

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="select_soft_container keyboard_card" data-title="キーボード練習">
                                                        <div class="select_soft_wrap">
                                                            <p class="soft_title soft_title_word">
                                                                word</p>
                                                            <p class="beginner_title">
                                                                中級</p>
                                                        </div>
                                                        <div class="select_inner_area">
                                                            <div class="soft_group">
                                                                <p class="explanation_text">
                                                                    wordで使える<br class="sp_only">ショートカットキーを
                                                                    <br class="pc_only"><br class="sp_only">練習するんじょ〜！
                                                                </p>
                                                                <div class="selectsoft_button_wrapper">
                                                                    <a class="game_select_button_anchor" href="">
                                                                        <button class="select_button
                                                                        select_button_silver">スタート</button>
                                                                    </a>
                                                                    <!-- <a class="game_select_button_anchor" href="">
                                                                        <button class="select_button shortcut_select_button
                                                                        select_button_silver">ランキング
                                                                        </button>
                                                                    </a> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="select_soft_container keyboard_card" data-title="キーボード練習">
                                                        <div class="select_soft_wrap">
                                                            <p class="soft_title soft_title_word">
                                                                word</p>
                                                            <p class="beginner_title">
                                                                上級</p>
                                                        </div>
                                                        <div class="select_inner_area">
                                                            <div class="soft_group">
                                                                <p class="explanation_text">
                                                                    wordで使える<br class="sp_only">ショートカットキーを
                                                                    <br class="pc_only"><br class="sp_only">練習するんじょ〜！
                                                                </p>
                                                                <div class="selectsoft_button_wrapper">
                                                                    <a class="game_select_button_anchor" href="">
                                                                        <button class="select_button
                                                                        select_button_gold">スタート</button>
                                                                    </a>
                                                                    <!-- <a class="game_select_button_anchor" href="">
                                                                        <button class="select_button shortcut_select_button
                                                                        select_button_gold">ランキング
                                                                        </button>
                                                                    </a> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="select_soft_container keyboard_card" data-title="キーボード練習">
                                                        <div class="select_soft_wrap">
                                                            <p class="soft_title soft_title_word">word</p>
                                                            <p class="soft_title">ランダム</p>
                                                        </div>
                                                        <div class="select_inner_area">
                                                            <div class="soft_group">
                                                                <p class="explanation_text">
                                                                                                                        wordで使える<br class="sp_only">ショートカットキーを
                                                                                                                        <br class="pc_only"><br class="sp_only">練習するんじょ〜！
                                                                                                                    </p>
                                                                <div class="selectsoft_button_wrapper">
                                                                    <a class="game_select_button_anchor" href="">
                                                                        <button class="select_button select_button_bronze">スタート</button>
                                                                    </a>
                                                                    <!-- <a class="game_select_button_anchor" href="">
                                                                                                                            <button class="select_button shortcut_select_button
                                                                                                                            select_button_bronze">ランキング
                                                                                                                            </button>
                                                                                                                        </a> -->
                                                                    <!-- <a class="game_select_button_anchor" href="">
                                                                                                                            <button class="select_button shortcut_select_button
                                                                                                                            select_button_random">ランダム
                                                                                                                            </button>
                                                                                                                        </a> -->

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- キー入力カードここまで -->

                                                <!-- 選択式クイズカードここから -->
                                                <div class="soft_wrapper">
                                                    <div class="select_soft_container choose_card" data-title="選択式クイズ">
                                                        <div class="select_soft_wrap">
                                                            <p class="soft_title soft_title_word">
                                                                word</p>
                                                            <p class="soft_title">
                                                                初級</p>
                                                        </div>
                                                        <div class="select_inner_area">
                                                            <div class="soft_group">
                                                                <p class="explanation_text">
                                                                    wordで使える<br class="sp_only">ショートカットキーを
                                                                    <br class="pc_only"><br class="sp_only">練習するんじょ〜！
                                                                </p>
                                                                <div class="selectsoft_button_wrapper">
                                                                    <a class="game_select_button_anchor" href="">
                                                                        <button class="select_button select_button_bronze">スタート</button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="select_soft_container choose_card" data-title="選択式クイズ">
                                                        <div class="select_soft_wrap">
                                                            <p class="soft_title soft_title_word">
                                                                word
                                                            </p>
                                                            <p class="beginner_title">
                                                                中級
                                                            </p>
                                                        </div>
                                                        <div class="select_inner_area">
                                                            <div class="soft_group">
                                                                <p class="explanation_text">
                                                                    wordで使える<br class="sp_only">ショートカットキーを
                                                                    <br class="pc_only"><br class="sp_only">練習するんじょ〜！
                                                                </p>
                                                                <div class="selectsoft_button_wrapper">
                                                                    <a class="game_select_button_anchor" href="">
                                                                        <button class="select_button
                                                                        select_button_silver">スタート</button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="select_soft_container choose_card" data-title="選択式クイズ">
                                                        <div class="select_soft_wrap">
                                                            <p class="soft_title soft_title_word">
                                                                word</p>
                                                            <p class="beginner_title">
                                                                上級</p>
                                                        </div>
                                                        <div class="select_inner_area">
                                                            <div class="soft_group">
                                                                <p class="explanation_text">
                                                                    wordで使える<br class="sp_only">ショートカットキーを
                                                                    <br class="pc_only"><br class="sp_only">練習するんじょ〜！
                                                                </p>
                                                                <div class="selectsoft_button_wrapper">
                                                                    <a class="game_select_button_anchor" href="">
                                                                        <button class="select_button
                                                                        select_button_gold">スタート</button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="select_soft_container keyboard_card" data-title="キーボード練習">
                                                        <div class="select_soft_wrap">
                                                            <p class="soft_title soft_title_word">word</p>
                                                            <p class="soft_title">ランダム</p>
                                                        </div>
                                                        <div class="select_inner_area">
                                                            <div class="soft_group">
                                                                <p class="explanation_text">
                                                                                                                        wordで使える<br class="sp_only">ショートカットキーを
                                                                                                                        <br class="pc_only"><br class="sp_only">練習するんじょ〜！
                                                                                                                    </p>
                                                                <div class="selectsoft_button_wrapper">
                                                                    <a class="game_select_button_anchor" href="">
                                                                        <button class="select_button select_button_bronze">スタート</button>
                                                                    </a>
                                                                    <!-- <a class="game_select_button_anchor" href="">
                                                                                                                            <button class="select_button shortcut_select_button
                                                                                                                            select_button_bronze">ランキング
                                                                                                                            </button>
                                                                                                                        </a> -->
                                                                    <!-- <a class="game_select_button_anchor" href="">
                                                                                                                            <button class="select_button shortcut_select_button
                                                                                                                            select_button_random">ランダム
                                                                                                                            </button>
                                                                                                                        </a> -->

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 選択式クイズカードここまで -->
                                            </div>
                                        </div>
                                        <!-- Windowタブの中身ここまで -->

                                        <!-- Macタブここから -->
                                        <div class="Mac">(test2)
                                            <div class="soft_area">
                                                <!-- キー入力カード -->
                                                <div class="soft_wrapper">
                                                    <div class="select_soft_container keyboard_card" data-title="キーボード練習">
                                                        <div class="select_soft_wrap">
                                                            <p class="soft_title soft_title_word">
                                                                word</p>
                                                            <p class="soft_title">
                                                                初級</p>
                                                        </div>
                                                        <div class="select_inner_area">
                                                            <div class="soft_group">
                                                                <p class="explanation_text">
                                                                    wordで使える<br class="sp_only">ショートカットキーを
                                                                    <br class="pc_only"><br class="sp_only">練習するんじょ〜！
                                                                </p>
                                                                <div class="selectsoft_button_wrapper">
                                                                    <a class="game_select_button_anchor" href="">
                                                                        <button class="select_button select_button_bronze">スタート</button>
                                                                    </a>
                                                                    <a class="game_select_button_anchor" href="">
                                                                        <button class="select_button shortcut_select_button
                                                                        select_button_bronze">ランキング
                                                                        </button>
                                                                    </a>
                                                                    <!-- <a class="game_select_button_anchor" href="">
                                                                        <button class="select_button shortcut_select_button
                                                                        select_button_random">ランダム
                                                                        </button>
                                                                    </a> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="select_soft_container keyboard_card" data-title="キーボード練習">
                                                        <div class="select_soft_wrap">
                                                            <p class="soft_title soft_title_word">
                                                                word
                                                            </p>
                                                            <p class="beginner_title">
                                                                中級
                                                            </p>
                                                        </div>
                                                        <div class="select_inner_area">
                                                            <div class="soft_group">
                                                                <p class="explanation_text">
                                                                    wordで使える<br class="sp_only">ショートカットキーを
                                                                    <br class="pc_only"><br class="sp_only">練習するんじょ〜！
                                                                </p>
                                                                <div class="selectsoft_button_wrapper">
                                                                    <a class="game_select_button_anchor" href="">
                                                                        <button class="select_button
                                                                        select_button_silver">スタート</button>
                                                                    </a>
                                                                    <a class="game_select_button_anchor" href="">
                                                                        <button class="select_button shortcut_select_button
                                                                        select_button_silver">ランキング
                                                                        </button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="select_soft_container keyboard_card" data-title="キーボード練習">
                                                        <div class="select_soft_wrap">
                                                            <p class="soft_title soft_title_word">
                                                                word</p>
                                                            <p class="beginner_title">
                                                                上級</p>
                                                        </div>
                                                        <div class="select_inner_area">
                                                            <div class="soft_group">
                                                                <p class="explanation_text">
                                                                    wordで使える<br class="sp_only">ショートカットキーを
                                                                    <br class="pc_only"><br class="sp_only">練習するんじょ〜！
                                                                </p>
                                                                <div class="selectsoft_button_wrapper">
                                                                    <a class="game_select_button_anchor" href="">
                                                                        <button class="select_button
                                                                        select_button_gold">スタート</button>
                                                                    </a>
                                                                    <a class="game_select_button_anchor" href="">
                                                                        <button class="select_button shortcut_select_button
                                                                        select_button_gold">ランキング
                                                                        </button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- キー入力カードここまで -->

                                                <!-- 選択式クイズカードここから -->
                                                <div class="soft_wrapper">
                                                    <div class="select_soft_container choose_card" data-title="選択式クイズ">
                                                        <div class="select_soft_wrap">
                                                            <p class="soft_title soft_title_word">
                                                                word</p>
                                                            <p class="soft_title">
                                                                初級</p>
                                                        </div>
                                                        <div class="select_inner_area">
                                                            <div class="soft_group">
                                                                <p class="explanation_text">
                                                                    wordで使える<br class="sp_only">ショートカットキーを
                                                                    <br class="pc_only"><br class="sp_only">練習するんじょ〜！
                                                                </p>
                                                                <div class="selectsoft_button_wrapper">
                                                                    <a class="game_select_button_anchor" href="">
                                                                        <button class="select_button select_button_bronze">スタート</button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="select_soft_container choose_card" data-title="選択式クイズ">
                                                        <div class="select_soft_wrap">
                                                            <p class="soft_title soft_title_word">
                                                                word
                                                            </p>
                                                            <p class="beginner_title">
                                                                中級
                                                            </p>
                                                        </div>
                                                        <div class="select_inner_area">
                                                            <div class="soft_group">
                                                                <p class="explanation_text">
                                                                    wordで使える<br class="sp_only">ショートカットキーを
                                                                    <br class="pc_only"><br class="sp_only">練習するんじょ〜！
                                                                </p>
                                                                <div class="selectsoft_button_wrapper">
                                                                    <a class="game_select_button_anchor" href="">
                                                                        <button class="select_button
                                                                        select_button_silver">スタート</button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="select_soft_container choose_card" data-title="選択式クイズ">
                                                        <div class="select_soft_wrap">
                                                            <p class="soft_title soft_title_word">
                                                                word</p>
                                                            <p class="beginner_title">
                                                                上級</p>
                                                        </div>
                                                        <div class="select_inner_area">
                                                            <div class="soft_group">
                                                                <p class="explanation_text">
                                                                    wordで使える<br class="sp_only">ショートカットキーを
                                                                    <br class="pc_only"><br class="sp_only">練習するんじょ〜！
                                                                </p>
                                                                <div class="selectsoft_button_wrapper">
                                                                    <a class="game_select_button_anchor" href="">
                                                                        <button class="select_button
                                                                        select_button_gold">スタート</button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 選択式クイズカードここまで -->
                                            </div>
                                        </div>
                                        <!-- Macタブここまで -->
                                    </div>
                                    <!-- タブ全体の中身ここまで -->
                                </div>
                            </section>
                        </div>

                        <!-- サイドバーここから -->
                        <div class="sidebar">
                            <p class="sidebar_title">
                                Category
                            </p>
                            <div class="shortcutlist_sidebar_wrapper">
                                <p class="shortcutlist_sidebar_category_title">Windows</p>
                                <ul class="shortcutlist_sidebar_list">
                                    <a href="#">
                                        <li class="shortcutlist_sidebar_list_li">Windows全般</li>
                                    </a>
                                    <a href="#">
                                        <li class="shortcutlist_sidebar_list_li">Word</li>
                                    </a>
                                    <a href="#">
                                        <li class="shortcutlist_sidebar_list_li">Excel</li>
                                    </a>
                                    <a href="">
                                        <li class="shortcutlist_sidebar_list_li">PowerPoint</li>
                                    </a>
                                    <a href="">
                                        <li class="shortcutlist_sidebar_list_li">Illustrator</li>
                                    </a>
                                    <a href="">
                                        <li class="shortcutlist_sidebar_list_li">PhotoShop</li>
                                    </a>
                                    <a href="">
                                        <li class="shortcutlist_sidebar_list_li">GoogleChrome</li>
                                    </a>
                                    <a href="">
                                        <li class="shortcutlist_sidebar_list_li">その他</li>
                                    </a>
                                </ul>
                                <p class="shortcutlist_sidebar_category_title">Mac</p>
                                <ul class="shortcutlist_sidebar_list">
                                    <a href="">
                                        <li class="shortcutlist_sidebar_list_li">Word</li>
                                    </a>
                                    <a href="">
                                        <li class="shortcutlist_sidebar_list_li">Excel</li>
                                    </a>
                                    <a href="">
                                        <li class="shortcutlist_sidebar_list_li">PowerPoint</li>
                                    </a>
                                    <a href="">
                                        <li class="shortcutlist_sidebar_list_li">Illustrator</li>
                                    </a>
                                    <a href="">
                                        <li class="shortcutlist_sidebar_list_li">PhotoShop</li>
                                    </a>
                                    <a href="">
                                        <li class="shortcutlist_sidebar_list_li">GoogleChrome</li>
                                    </a>
                                    <a href="">
                                        <li class="shortcutlist_sidebar_list_li">その他</li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                        <!-- サイドバーここまで -->
                    </div>
                    <!-- sidebar_wrapper -->
                </div>
                <!-- base_wrapper -->
            </div>
            <!-- .base_container -->
        </main>

@endsection
