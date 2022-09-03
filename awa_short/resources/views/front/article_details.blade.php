@extends('layouts.front_base')

@section('title', '記事詳細')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/article_details.css') }}">
@endsection

@section('main')
    <main class="main">
        <div class="key_visual_wrapper">
            <img src="{{ asset('img/IT_info.jpeg') }}" alt="キービジュアル" class="key_visual">
            <!-- <h2 class="page_title">記事詳細</h2> -->
        </div>
        <span class="spacer_sm"></span>
        <div class="base_container">
            <div class="base_wrapper">
                <!-- ここから画像下のコンテンツ開始  ※作業確認用testクラスは削除↓ -->
                <section>
                    <article>
                        <div class="articledetails_IT_infomation">
                            @php
                                // $path = 'http://localhost/awa_shortcut/' . 'public/storage/article_thumbnail/';

                                $path = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . '/awa_shortcut/public/storage/article_thumbnail/';
                            @endphp
                            @if ($article->updated_at !== null)
                                {{ $article->updated_at->format('Y/m/d') }}
                            @else
                                {{ $article->created_at->format('Y/m/d') }}
                            @endif


                            <h3 class="heading">

                                {{ $article->title }}
                            </h3>

                            <img src="{{ asset('storage/article_thumbnail') }}/{{ $article['thumbnail'] }}"
                                alt="{{ $article['title'] }}" class="article_details_img">

                            {{-- div class="article_details_text_area 佐伯追加 --}}
                            <div class="article_details_text_area">
                                <p class="article_details_text">
                                    {{-- {{ $article->summary }} --}}
                                    {!! nl2br(e($article->content)) !!}
                                </p>
                            </div>

                        </div>
                    </article>
                </section>

                <section>
                    <div class="articledetails_IT_infomation">
                        <h3 class="heading">
                            新着記事
                        </h3>
                        <div class="articles_card_wrapper">

                            {{-- author:shohei ブレードにforeachの埋め込み --}}
                            @foreach ($latest_articles as $latest_article)
                                <article class="article">
                                    <a href="{{ $latest_article->id }}">
                                        <div class="articles_card_header">

                                            {{-- <img src="storage/article_thumbnail/{{ $article['thumbnail'] }}"
                                                alt="{{ $article['title'] }}"> --}}

                                            <img src="{{ asset('storage/article_thumbnail') }}/{{ $latest_article['thumbnail'] }}"
                                                alt="{{ $article['title'] }}" class="articles_card_img">

                                            <div class="article_category_label">
                                                {{ $latest_article->articleCategories->name }}
                                            </div>
                                        </div>
                                        <div class="articles_card_body">
                                            <h4>{{ $latest_article->title }}</h4>
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
                    </div>
                </section>
                <!-- Back to Page butto  -->
                <div class="inversion_button_layout">
                    <a href="{{ route('front.article') }}" class="inversion_button">
                        <span>Back to Page</span>
                        <span>記事一覧に戻る</span></a>
                </div>
            </div>
        </div>
        <!-- .base_container -->
    </main>
@endsection
