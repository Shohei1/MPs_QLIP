@extends('layouts.front_base')

@section('title', 'クイズカテゴリ選択')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/quiz_game_select.css') }}">
@endsection

@section('main')
    <main class="main">
        <div class="game_top_space">
        </div>
        <span class="spacer_sm"></span>
        <div class="base_container">
            <div class="base_wrapper">
                <section class="game_select">
                    <h2 class="game_top_title" id="typewriter">選択式クイズで楽しく覚えよう！</h2>
                    <h3 class="select_title">練習したいゲームを選ぶんじょ〜！</h3>
                    <div class="game_selectlist">
                        <div class="selectsoft_wrapper">
                            <h3 class="os_title">Windows</h3>

                            <div class="soft_title">
                                <h4 class="soft_name">Word</h4>
                                <div class="selectsoft_button_wrapper">
                                    <a class="selectsoft_button_anchor" href="quiz_game_play/23">
                                        <div class="selectsoft_button select_button_bronze">LEVEL1
                                        </div>
                                    </a>
                                    <a class="selectsoft_button_anchor" href="">
                                        <div class="selectsoft_button select_button_silver">LEVEL2</div>
                                    </a>
                                    <a class="selectsoft_button_anchor" href="">
                                        <div class="selectsoft_button select_button_gold">LEVEL3</div>
                                    </a>
                                </div>
                            </div>

                            <div class="soft_title">
                                <h4 class="soft_name">Excel</h4>
                                <div class="selectsoft_button_wrapper">
                                    <a class="selectsoft_button_anchor" href="">
                                        <div class="selectsoft_button select_button_bronze">
                                            LEVEL1
                                        </div>
                                    </a>
                                    <a class="selectsoft_button_anchor" href="">
                                        <div class="selectsoft_button select_button_silver">
                                            LEVEL2</div>
                                    </a>
                                    <a class="selectsoft_button_anchor" href="">
                                        <div class="selectsoft_button select_button_gold">
                                            LEVEL3</div>
                                    </a>
                                </div>
                            </div>

                            <div class="soft_title">
                                <h4 class="soft_name">PowerPoint</h4>
                                <div class="selectsoft_button_wrapper">
                                    <a class="selectsoft_button_anchor" href="">
                                        <div class="selectsoft_button select_button_bronze">
                                            LEVEL1
                                        </div>
                                    </a>
                                    <a class="selectsoft_button_anchor" href="">
                                        <div class="selectsoft_button select_button_silver">
                                            LEVEL2</div>
                                    </a>
                                    <a class="selectsoft_button_anchor" href="">
                                        <div class="selectsoft_button select_button_gold">
                                            LEVEL3</div>
                                    </a>
                                </div>
                            </div>

                            <div class="soft_title">
                                <h4 class="soft_name">
                                    Illustrator</h4>
                                <div class="selectsoft_button_wrapper">
                                    <a class="selectsoft_button_anchor" href="">
                                        <div class="selectsoft_button select_button_bronze">
                                            LEVEL1
                                        </div>
                                    </a>
                                    <a class="selectsoft_button_anchor" href="">
                                        <div class="selectsoft_button select_button_silver">
                                            LEVEL2</div>
                                    </a>
                                    <a class="selectsoft_button_anchor" href="">
                                        <div class="selectsoft_button select_button_gold">
                                            LEVEL3</div>
                                    </a>
                                </div>
                            </div>

                            <div class="soft_title">
                                <h4 class="soft_name">PhotoShop</h4>
                                <div class="selectsoft_button_wrapper">
                                    <a class="selectsoft_button_anchor" href="">
                                        <div class="selectsoft_button select_button_bronze">
                                            LEVEL1
                                        </div>
                                    </a>
                                    <a class="selectsoft_button_anchor" href="">
                                        <div class="selectsoft_button select_button_silver">
                                            LEVEL2</div>
                                    </a>
                                    <a class="selectsoft_button_anchor" href="">
                                        <div class="selectsoft_button select_button_gold">
                                            LEVEL3</div>
                                    </a>
                                </div>
                            </div>

                            <div class="soft_title">
                                <h4 class="soft_name">Googlechrome</h4>
                                <div class="selectsoft_button_wrapper">
                                    <a class="selectsoft_button_anchor" href="">
                                        <div class="selectsoft_button select_button_bronze">
                                            LEVEL1
                                        </div>
                                    </a>
                                    <a class="selectsoft_button_anchor" href="">
                                        <div class="selectsoft_button select_button_silver">
                                            LEVEL2</div>
                                    </a>
                                    <a class="selectsoft_button_anchor" href="">
                                        <div class="selectsoft_button select_button_gold">
                                            LEVEL3</div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="selectsoft_wrapper">
                            <h3 class="os_title">Mac</h3>

                            <div class="soft_title">
                                <h4 class="soft_name">Word</h4>
                                <div class="selectsoft_button_wrapper">
                                    <a class="selectsoft_button_anchor" href="">
                                        <div class="selectsoft_button select_button_bronze">
                                            LEVEL1
                                        </div>
                                    </a>
                                    <a class="selectsoft_button_anchor" href="">
                                        <div class="selectsoft_button select_button_silver">
                                            LEVEL2</div>
                                    </a>
                                    <a class="selectsoft_button_anchor" href="">
                                        <div class="selectsoft_button select_button_gold">
                                            LEVEL3</div>
                                    </a>
                                </div>
                            </div>

                            <div class="soft_title">
                                <h4 class="soft_name">Excel</h4>
                                <div class="selectsoft_button_wrapper">
                                    <a class="selectsoft_button_anchor" href="">
                                        <div class="selectsoft_button select_button_bronze">
                                            LEVEL1
                                        </div>
                                    </a>
                                    <a class="selectsoft_button_anchor" href="">
                                        <div class="selectsoft_button select_button_silver">
                                            LEVEL2</div>
                                    </a>
                                    <a class="selectsoft_button_anchor" href="">
                                        <div class="selectsoft_button select_button_gold">
                                            LEVEL3</div>
                                    </a>
                                </div>
                            </div>

                            <div class="soft_title">
                                <h4 class="soft_name">PowerPoint</h4>
                                <div class="selectsoft_button_wrapper">
                                    <a class="selectsoft_button_anchor" href="">
                                        <div class="selectsoft_button select_button_bronze">
                                            LEVEL1
                                        </div>
                                    </a>
                                    <a class="selectsoft_button_anchor" href="">
                                        <div class="selectsoft_button select_button_silver">
                                            LEVEL2</div>
                                    </a>
                                    <a class="selectsoft_button_anchor" href="">
                                        <div class="selectsoft_button select_button_gold">
                                            LEVEL3</div>
                                    </a>
                                </div>
                            </div>

                            <div class="soft_title">
                                <h4 class="soft_name">
                                    Illustrator</h4>
                                <div class="selectsoft_button_wrapper">
                                    <a class="selectsoft_button_anchor" href="">
                                        <div class="selectsoft_button select_button_bronze">
                                            LEVEL1
                                        </div>
                                    </a>
                                    <a class="selectsoft_button_anchor" href="">
                                        <div class="selectsoft_button select_button_silver">
                                            LEVEL2</div>
                                    </a>
                                    <a class="selectsoft_button_anchor" href="">
                                        <div class="selectsoft_button select_button_gold">
                                            LEVEL3</div>
                                    </a>
                                </div>
                            </div>

                            <div class="soft_title">
                                <h4 class="soft_name">PhotoShop</h4>
                                <div class="selectsoft_button_wrapper">
                                    <a class="selectsoft_button_anchor" href="">
                                        <div class="selectsoft_button select_button_bronze">
                                            LEVEL1
                                        </div>
                                    </a>
                                    <a class="selectsoft_button_anchor" href="">
                                        <div class="selectsoft_button select_button_silver">
                                            LEVEL2</div>
                                    </a>
                                    <a class="selectsoft_button_anchor" href="">
                                        <div class="selectsoft_button select_button_gold">
                                            LEVEL3</div>
                                    </a>
                                </div>
                            </div>

                            <div class="soft_title">
                                <h4 class="soft_name">Googlechrome</h4>
                                <div class="selectsoft_button_wrapper">
                                    <a class="selectsoft_button_anchor" href="">
                                        <div class="selectsoft_button select_button_bronze">
                                            LEVEL1
                                        </div>
                                    </a>
                                    <a class="selectsoft_button_anchor" href="">
                                        <div class="selectsoft_button select_button_silver">
                                            LEVEL2</div>
                                    </a>
                                    <a class="selectsoft_button_anchor" href="">
                                        <div class="selectsoft_button select_button_gold">
                                            LEVEL3</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- </section> -->
        </div>
        <!-- .base_container -->
    </main>


@endsection


@section('js')
    <script src="{{ asset('js/game_select.js') }}"></script>
@endsection
