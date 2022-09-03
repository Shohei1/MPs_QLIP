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
                <h3 class="ranking_title">ランキングセレクト</h3>

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
                                        <div class="select_area_wrapper">
                                            <div class="soft_area">
                                                <h3 class="soft_title soft_title_word" id="windows_os">Windows OS</h3>
                                                <div class="select_inner_area">
                                                    <div class="soft_group">
                                                        <h4 class="select_class">初&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="ranking_details/1">

                                                                <button
                                                                    class="select_button select_button_bronze">ランキング</button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">中&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="ranking_details/2">
                                                                <button
                                                                    class="select_button select_button_silver">ランキング</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">上&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="ranking_details/3">
                                                                <button
                                                                    class="select_button select_button_gold">ランキング</button>
                                                            </a>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="select_area_wrapper">
                                            <div class="soft_area">
                                                <h3 class="soft_title soft_title_word" id="windows_vscode">Windows VS Code
                                                </h3>
                                                <div class="select_inner_area">
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">初&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="/ranking_details/9">
                                                                <button
                                                                    class="select_button select_button_bronze">ランキング</button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">中&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="/ranking_details/">
                                                                <button
                                                                    class="select_button select_button_silver">ランキング</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">上&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor"
                                                                href="/ranking_details/1/7/3/2">
                                                                <button
                                                                    class="select_button select_button_gold">ランキング</button>
                                                            </a>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="select_area_wrapper">
                                            <div class="soft_area">
                                                <h3 class="soft_title soft_title_word" id="windows_photoshop">Windows
                                                    Photoshop</h3>
                                                <div class="select_inner_area">
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">初&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="ranking_details/51">
                                                                <button
                                                                    class="select_button select_button_bronze">ランキング</button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">中&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="ranking_details/52">
                                                                <button
                                                                    class="select_button select_button_silver">ランキング</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">上&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="ranking_details/53">
                                                                <button
                                                                    class="select_button select_button_gold">ランキング</button>
                                                            </a>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="select_area_wrapper">
                                            <div class="soft_area">
                                                <h3 class="soft_title soft_title_word" id="windows_Illustrator">Windows
                                                    Illistrator</h3>
                                                <div class="select_inner_area">
                                                    <div class="soft_group">
                                                        <h4 class="select_class">初&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="ranking_details/43">
                                                                <button
                                                                    class="select_button select_button_bronze">ランキング</button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">中&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="ranking_details/44">
                                                                <button
                                                                    class="select_button select_button_silver">ランキング</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">上&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="ranking_details/45">
                                                                <button
                                                                    class="select_button select_button_gold">ランキング</button>
                                                            </a>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="select_area_wrapper">
                                            <div class="soft_area">
                                                <h3 class="soft_title soft_title_word" id="windows_PowerPoint">Windows
                                                    PowerPoint</h3>
                                                <div class="select_inner_area">
                                                    <div class="soft_group">
                                                        <h4 class="select_class">初&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor" href="ranking_details/51">
                                                                <button
                                                                    class="select_button select_button_bronze">ランキング</button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">中&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor"
                                                                href="ranking_details/52">
                                                                <button
                                                                    class="select_button select_button_silver">ランキング</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">上&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor"
                                                                href="ranking_details/53">
                                                                <button
                                                                    class="select_button select_button_gold">ランキング</button>
                                                            </a>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="select_area_wrapper">
                                            <div class="soft_area">
                                                <h3 class="soft_title soft_title_word" id="windows_Excel">Windows Excel
                                                </h3>
                                                <div class="select_inner_area">
                                                    <div class="soft_group">
                                                        <h4 class="select_class">初&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor"
                                                                href="ranking_details/27">
                                                                <button
                                                                    class="select_button select_button_bronze">ランキング</button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">中&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor"
                                                                href="ranking_details/28">
                                                                <button
                                                                    class="select_button select_button_silver">ランキング</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">上&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor"
                                                                href="ranking_details/29">
                                                                <button
                                                                    class="select_button select_button_gold">ランキング</button>
                                                            </a>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="select_area_wrapper">
                                            <div class="soft_area">
                                                <h3 class="soft_title soft_title_word" id="windows_Word">Windows Word</h3>
                                                <div class="select_inner_area">
                                                    <div class="soft_group">
                                                        <h4 class="select_class">初&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor"
                                                                href="ranking_details/19">
                                                                <button
                                                                    class="select_button select_button_bronze">ランキング</button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">中&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor"
                                                                href="ranking_details/20">
                                                                <button
                                                                    class="select_button select_button_silver">ランキング</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">上&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor"
                                                                href="ranking_details/21">
                                                                <button
                                                                    class="select_button select_button_gold">ランキング</button>
                                                            </a>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="select_area_wrapper">
                                            <div class="soft_area">
                                                <h3 class="soft_title soft_title_word" id="windows_Gmail">Windows Gmail
                                                </h3>
                                                <div class="select_inner_area">
                                                    <div class="soft_group">
                                                        <h4 class="select_class">初&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor"
                                                                href="ranking_details/59">
                                                                <button
                                                                    class="select_button select_button_bronze">ランキング</button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">中&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor"
                                                                href="ranking_details/60">
                                                                <button
                                                                    class="select_button select_button_silver">ランキング</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">上&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor"
                                                                href="ranking_details/61">
                                                                <button
                                                                    class="select_button select_button_gold">ランキング</button>
                                                            </a>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="select_area_wrapper">
                                            <div class="soft_area">
                                                <h3 class="soft_title soft_title_word" id="windows_Outlook">Windows
                                                    Outlook</h3>
                                                <div class="select_inner_area">
                                                    <div class="soft_group">
                                                        <h4 class="select_class">初&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor"
                                                                href="ranking_details/11">
                                                                <button
                                                                    class="select_button select_button_bronze">ランキング</button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">中&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor"
                                                                href="ranking_details/12">
                                                                <button
                                                                    class="select_button select_button_silver">ランキング</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">上&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor"
                                                                href="ranking_details/13">
                                                                <button
                                                                    class="select_button select_button_gold">ランキング</button>
                                                            </a>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="select_area_wrapper">
                                            <div class="soft_area">
                                                <h3 class="soft_title soft_title_word" id="mac_os">Mac OS</h3>
                                                <div class="select_inner_area">
                                                    <div class="soft_group">
                                                        <h4 class="select_class">初&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor"
                                                                href="/ranking_details/1/7/1/2">
                                                                <button
                                                                    class="select_button select_button_bronze">ランキング</button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">中&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor"
                                                                href="/ranking_details/1/7/2/2">
                                                                <button
                                                                    class="select_button select_button_silver">ランキング</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">上&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor"
                                                                href="/ranking_details/1/7/3/2">
                                                                <button
                                                                    class="select_button select_button_gold">ランキング</button>
                                                            </a>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="select_area_wrapper">
                                            <div class="soft_area">
                                                <h3 class="soft_title soft_title_word" id="mac_powerpoint">Mac PowerPoint
                                                </h3>
                                                <div class="select_inner_area">
                                                    <div class="soft_group">
                                                        <h4 class="select_class">初&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor"
                                                                href="ranking_details/83">
                                                                <button
                                                                    class="select_button select_button_bronze">ランキング</button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">中&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor"
                                                                href="ranking_details/84">
                                                                <button
                                                                    class="select_button select_button_silver">ランキング</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">上&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor"
                                                                href="ranking_details/85">
                                                                <button
                                                                    class="select_button select_button_gold">ランキング</button>
                                                            </a>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="select_area_wrapper">
                                            <div class="soft_area">
                                                <h3 class="soft_title soft_title_word" id="mac_Excel">Mac Excel</h3>
                                                <div class="select_inner_area">
                                                    <div class="soft_group">
                                                        <h4 class="select_class">初&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor"
                                                                href="ranking_details/67">
                                                                <button
                                                                    class="select_button select_button_bronze">ランキング</button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">中&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor"
                                                                href="ranking_details/68">
                                                                <button
                                                                    class="select_button select_button_silver">ランキング</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">上&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor"
                                                                href="ranking_details/69">
                                                                <button
                                                                    class="select_button select_button_gold">ランキング</button>
                                                            </a>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="select_area_wrapper">
                                            <div class="soft_area">
                                                <h3 class="soft_title soft_title_word" id="mac_Word">Mac Word</h3>
                                                <div class="select_inner_area">
                                                    <div class="soft_group">
                                                        <h4 class="select_class">初&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor"
                                                                href="ranking_details/75">
                                                                <button
                                                                    class="select_button select_button_bronze">ランキング</button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">中&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor"
                                                                href="ranking_details/76">
                                                                <button
                                                                    class="select_button select_button_silver">ランキング</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">上&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor"
                                                                href="ranking_details/77">
                                                                <button
                                                                    class="select_button select_button_gold">ランキング</button>
                                                            </a>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                    </div>



                                    {{-- <div class="Mac">
                                        <div class="select_area_wrapper">
                                            <div class="soft_area">
                                                <h3 class="soft_title soft_title_word" id="mac_word">word</h3>
                                                <div class="select_inner_area">
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">初&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor"
                                                                href="/ranking_details/1/7/1/2">
                                                                <button
                                                                    class="select_button select_button_bronze">ランキング</button>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">中&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor"
                                                                href="/ranking_details/1/7/2/2">
                                                                <button
                                                                    class="select_button select_button_silver">ランキング</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="soft_group">
                                                        <h4 class="select_class ">上&nbsp;級</h4>
                                                        <div class="selectsoft_button_wrapper">
                                                            <a class="game_select_button_anchor"
                                                                href="/ranking_details/1/7/3/2">
                                                                <button
                                                                    class="select_button select_button_gold">ランキング</button>
                                                            </a>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div> --}}
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
                                        <li class="shortcutlist_sidebar_list_li">Windows全般</li>
                                    </a>
                                    {{-- <a href="#windows_vscode">
                                        <li class="shortcutlist_sidebar_list_li">VS Code</li>
                                    </a> --}}
                                    <a href="#windows_photoshop">
                                        <li class="shortcutlist_sidebar_list_li">Photoshop</li>
                                    </a>
                                    <a href="#windows_Illustrator">
                                        <li class="shortcutlist_sidebar_list_li">Illustrator</li>
                                    </a>
                                    <a href="#windows_PowerPoint">
                                        <li class="shortcutlist_sidebar_list_li">PowerPoint</li>
                                    </a>
                                    <a href="#windows_Excel">
                                        <li class="shortcutlist_sidebar_list_li">Excel</li>
                                    </a>
                                    <a href="#windows_Word">
                                        <li class="shortcutlist_sidebar_list_li">Word</li>
                                    </a>
                                    <a href="#windows_Gmail">
                                        <li class="shortcutlist_sidebar_list_li">Gmail</li>
                                    </a>
                                    <a href="#windows_Outlook">
                                        <li class="shortcutlist_sidebar_list_li">Outlook</li>
                                    </a>
                                </ul>
                            </div>

                            <div class="sidebar_category_wrapper">
                                <p class="shortcutlist_sidebar_category_title">Mac</p>
                                <ul class="shortcutlist_sidebar_list">
                                    {{-- <a href="#mac_os">
                                        <li class="shortcutlist_sidebar_list_li">OS全般</li>
                                    </a> --}}
                                    <a href="#mac_powerpoint">
                                        <li class="shortcutlist_sidebar_list_li">PowerPoint</li>
                                    </a>
                                    <a href="#mac_Excel">
                                        <li class="shortcutlist_sidebar_list_li">Excel</li>
                                    </a>
                                    <a href="#mac_Word">
                                        <li class="shortcutlist_sidebar_list_li">Word</li>
                                    </a>
                                    {{-- <a href="#mac_powerpoint">
                                        <li class="shortcutlist_sidebar_list_li">PhotoShop</li>
                                    </a>
                                    <a href="">
                                        <li class="shortcutlist_sidebar_list_li">GoogleChrome</li>
                                    </a>
                                    <a href="">
                                        <li class="shortcutlist_sidebar_list_li">その他</li> --}}
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- .base_container -->
    </main>

@endsection
