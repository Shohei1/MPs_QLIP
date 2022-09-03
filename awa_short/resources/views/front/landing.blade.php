@extends('layouts.front_base')

@section('title', 'あわ☆しょーと！について')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
@endsection

@section('main')
    <main class="main">
        <div class="key_visual">
            <div class="key_visual_wrapper">
                <img src="{{ asset('img/episode_top.png') }}" alt="キービジュアル" class="key_visual_img">
                <h2 class="page_title">「あわ☆しょーと！」 ってなに？</h2>

            </div>
        </div>
        <span class="spacer_sm"></span>
        <div class="base_container">
            <div class="base_wrapper">
                <section class="landing_about">

                    <div class="landing_about_comic_wrapper">
                        <h3 class="landing_about_comic_heading">説明しよう！</h3>
                        <img src="{{ asset('img/comic/episode1text.png') }}" alt="" srcset="">
                        <span class="landing_about_comic_frame">
                            <img class="landing_about_comic_image" src="{{ asset('img/comic/episode1.png') }}"
                                alt="" srcset="">
                        </span>
                        <img src="{{ asset('img/comic/episode2text.png') }}" alt="" srcset="">
                        <span class="landing_about_comic_frame">
                            <img class="landing_about_comic_image" src="{{ asset('img/comic/episode2.png') }}"
                                alt="" srcset="">
                        </span>
                        <img src="{{ asset('img/comic/episode3text.png') }}" alt="" srcset="">
                        <span class="landing_about_comic_frame">
                            <img class="landing_about_comic_image" src="{{ asset('img/comic/episode3.png') }}"
                                alt=""srcset="">
                        </span>
                        <img src="{{ asset('img/comic/episode4text.png') }}" alt="" srcset="">
                        <span class="landing_about_comic_frame">
                            <img class="landing_about_comic_image" src="{{ asset('img/comic/episode4.png') }}"
                                alt="" srcset="">
                        </span>
                        <img class="landing_about_comic_arrow" src="{{ asset('img/suukagetugo.png') }}" alt=""
                            srcset="">
                        <img src="{{ asset('img/comic/episode5text.png') }}" alt="" srcset="">
                        <span class="landing_about_comic_frame">
                            <img class="landing_about_comic_image" src="{{ asset('img/comic/episode5.png') }}"
                                alt="" srcset=""></span>
                        <p class="landing_paragraph">かくしてショー子は業務効率化を成し遂げた...</p>
                    </div>

                    <div class="landing_about_heading_box">
                        <p class="landing_about_heading">戦えショー子！<br>
                            業務効率化、徳島のIT推進のために！！</p>
                        <img class="landing_about_heading_image" src="{{ asset('img/shoko_zenshin.png') }}" alt=""
                            srcset="">
                    </div>
                </section>

                <section class="landing_howto">
                    <img class="landing_howto_image" src="{{ asset('img/sudachi_neru3.png') }}" alt="">
                    <p class="landing_paragraph">
                        業務の効率化、したないで？<br>このサイトでおまはんもショートカットキーの練習したらええんで！<br><br>ワード、エクセルからアドビまで、色んなショートカットここに集めたけん<br>今すぐさっさぁ練習しぃ！
                    </p>
                    <div class="top_visual_introduce">

                        <div class="top_visual_button_wrapper">
                            <a href="shortcut_select" class="top_visual_button"><span>Play</span><span>ゲームをプレイする</span></a>
                        </div>
                    </div>
                    {{-- <span class="landing_howto_img_frame">
                        <img class="landing_howto_img" src="https://placehold.jp/1000x600.png" alt=""
                            srcset="">
                    </span>
                    <span class="landing_howto_img_frame">
                        <img class="landing_howto_img" src="https://placehold.jp/1000x600.png" alt=""
                            srcset="">
                    </span> --}}
                    <p class="article_introduce">マジメなサイト概要はこちら</p>
                    <article class="article">
                        <a href="article_details/8">
                            <div class="articles_card_header">

                                {{-- <img src="http://localhost/storage/article_thumbnail/demo.jpeg" alt="「あわ☆ショート!」WEBアプリが公開されました!" class="articles_card_img"> --}}
                                <img src="{{ asset('storage/article_thumbnail/demo.jpeg') }}"
                                    alt="「あわ☆ショート!」WEBアプリが公開されました!" class="articles_card_img">

                                <div class="article_category_label">Pick up
                                </div>
                            </div>
                            <div class="articles_card_body">
                                <h4>「あわ☆ショート!」WEBアプリが公開されました!</h4>
                                <span class="articles_card_date">
                                    2022/08/05
                                </span>
                            </div>
                        </a>
                    </article>
                </section>
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
