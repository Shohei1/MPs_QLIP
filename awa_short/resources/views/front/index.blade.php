@extends('layouts.front_base')

@section('title', 'あわ☆しょーと！')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/top.css') }}">
@endsection

@section('main')
    <main class="main">
        <div class="top_visual_wrapper">
            <img class="top_visual_shoko_first top_visual_shoko_firstAnimationTrigger"
                src="{{ asset('img/shoko_zenshin.png') }}" alt="" srcset="">
            <img class="top_visual_takenmin_first top_visual_takenmin_firstAnimationTrigger"
                src="{{ asset('img/takenmin02.png') }}" alt="" srcset="">
            <img class="top_visual_image top_visual_imageAnimationTrigger" src="{{ asset('img/shoko_sudachiojisan.png') }}"
                alt="イメージキャラクター:阿波ショー子ちゃんとすだちのおっちゃん" srcset="">

            <div class="top_title_box top_title_boxAnimationTrigger">
                <p class="top_title_top">徳島県民vs他県民</p>
                <img src="{{ asset('img/top_title_main.png') }}" alt="ショートカットバトル"
                    class="top_title_main titleAnimationTrigger top_title_main_pc">
                <img src="{{ asset('img/title_SP.png') }}" alt="ショートカットバトル"
                    class="top_title_main titleAnimationTrigger top_title_main_sp">
                <p class="top_title_bottom">～ここで練習していき～</p>
            </div>
            <div class="top_visual_right top_visual_rightAnimationTrigger"></div>
            <img class="top_visual_right_image top_visual_right_imageAnimationTrigger"
                src="{{ asset('img/takenmin02.png') }}" alt="イメージキャラクター:他県民くん" srcset="">
            <!-- スクロールボタン -->
            <!-- <div class="scrolldown"><span>Scroll</span></div> -->
            <div class="top_visual_introduce top_title_boxAnimationTrigger">

                <div class="top_visual_button_wrapper top_about_button_wrapper_pc">
                    <a href="shortcut_select" class="top_visual_button top_about_button_pc"><span>ゲームする</span><span>Play
                            Games</span></a>
                </div>

                <span class="arrow">
                </span>
            </div>
        </div>
        <span class="spacer_sm"></span>
        <div class="base_container">
            <div class="base_wrapper">
                <section class="top_about">
                    <h2 class="top_about_heading fadeUpTrigger">「ショーカットキーの練習して<br>結果を競ってみよーだ！」</h2>
                    <p class="top_about_heading_repletion fadeUpTrigger">―すだちのおっちゃん (妖精)―</p>
                    <img class="top_about_image" src="{{ asset('img/sudachi_neru3.png') }}" alt="">
                    <p class="top_about_paragraph fadeUpTrigger">徳島県はIT先進県を目指しとってな、色々頑張っとんよ！<br><br>
                        ほなけんウチらでショートカットキーの練習できるアプリ作ったじょ！<br><br>
                        いろんなコマンドがあるけどようけ覚えて<br><br></p>
                    <p class="top_about_paragraph_strong01 fadeUpTrigger">業務効率化パワーUP!</p>
                    <p class="top_about_paragraph_strong02 fadeUpTrigger">他県民のおまはんらには絶対まけんでよ！<br>
                        ウチにかかってきぃ！！</p>
                    <div class="top_about_introduce">

                        <div class="top_about_button_wrapper fadeUpTrigger">
                            <p class="top_about_paragraph fadeUpTrigger">IT最強の徳島県民にみんな挑戦してみてな～～</p>
                            <a href="shortcut_select"
                                class="top_about_button top_about_button"><span>ゲームする</span><span>Start
                                    to
                                    Play!</span></a>
                        </div>

                        <div class="top_about_button_wrapper fadeUpTrigger">
                            <p class="top_about_paragraph fadeUpTrigger">他の人のスコアも確認しぃよ～</p>
                            <a href="ranking_list" class="top_about_button"><span>ランキングみる</span><span>Check the
                                    Ranking</span></a>
                        </div>
                    </div>
                </section>
                <section class="top_it_info">
                    <h3 class="heading">とくしまIT情報</h3>
                    <p class="top_it_info_explain">
                        徳島県民のみんなのための記事がいっぱいあるけんみてな～～
                    </p>
                    <div class="articles_card_wrapper">

                        {{-- author:shohei ブレードにforeachの埋め込み --}}
                        @foreach ($latest_articles as $article)
                            @php
                                // $path = 'http://localhost/awa_shortcut/' . 'public/storage/article_thumbnail/';
                                $path = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . '/awa_shortcut/public/storage/article_thumbnail/';
                            @endphp
                            <article class="article">
                                {{-- <a href="{{ $article->id }}"> --}}
                                <a href="article_details/{{ $article->id }}">
                                    <div class="articles_card_header">

                                        <img src="{{ asset('storage/article_thumbnail') }}/{{ $article['thumbnail'] }}"
                                            alt="{{ $article['title'] }}" class="articles_card_img">

                                        <div class="article_category_label">{{ $article->articleCategories->name }}</div>
                                    </div>
                                    <div class="articles_card_body">
                                        <h4>{{ $article->title }}</h4>
                                        <span class="articles_card_date">
                                            @if ($article->updated_at !== null)
                                                {{ $article->updated_at->format('Y/m/d') }}
                                            @else
                                                {{ $article->created_at->format('Y/m/d') }}
                                            @endif
                                        </span>
                                    </div>
                                </a>
                            </article>
                        @endforeach


                    </div>
                    <div class="inversion_button_layout">
                        <a href="{{ route('front.article') }}" class="inversion_button">
                            <span>More</span>
                            <span>もっと見る</span></a>
                    </div>
                </section>
            </div>
        </div>
        <!-- .base_container -->
    </main>
@endsection

@section('audio')
    <div id="audio_box" class="audio_box">
        <audio type="audio/mpeg" controls autoplay loop="metadata" id="audio">
            <source src="{{ asset('audio/阿波おどり 音楽 鳴り物 お囃子 高円寺 ぞめき BPM 110 - Japanese Festival AwaOdori Music.mp3') }}"
                type="audio/mp3" />
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
    <script src="{{ asset('js/top.js') }}"></script>
@endsection
