@extends('layouts.front_base')

@section('title', '記事詳細')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/articles.css') }}">
@endsection


@section('main')
    <main class="main">
        <!-- ここにmain_visualをいれて作業開始！※読んだら削除 -->
        <div class="key_visual_wrapper">
            <img src="{{ asset('img/IT_info.jpeg') }}" alt="" class="key_visual">
            <h2 class="page_title">とくしまIT情報</h2>
        </div>
        <span class="spacer_sm"></span>
        <div class="base_container">
            <div class="base_wrapper">
                <div class="sidebar_wrapper">
                    <div class="sidebar_main_contents">
                        <div class="articles_card_wrapper">

                            @foreach ($articles as $article)

                                {{-- @php

                                    $path = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . '/awa_shortcut/public/storage/article_thumbnail/';
                                @endphp --}}

                                <article class="article">
                                    <a href="article_details/{{ $article->id }}">
                                        <div class="articles_card_header">

                                            <img src="{{ asset('storage/article_thumbnail') }}/{{ $article['thumbnail'] }}"
                                                alt="{{ $article['title'] }}" class="articles_card_img">

                                            <div class="article_category_label">{{ $article->articleCategories->name }}
                                            </div>
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
                        <!-- .articles_card_wrapper -->
                        {{-- <div class="pagination_wrapper">
                            <ul class="pagination"> --}}
                        {{-- {{ $articles->appends(['sort' => $sort])->links() }} --}}
                        {{-- </ul>
                        </div> --}}

                        {{-- ペジネーションの記述 --}}
                        <div class="pagination_wrapper">
                            @if ($articles->lastPage() > 1)
                                <ul class="pagination">
                                    {{-- なくてもあってもいい部分 --}}
                                    {{-- <li class="page-item {{ ($articles->currentPage() == 1) ? ' disabled' : '' }}">
                                <a class="page-link" href="{{ $articles->url(1) }}">First Page</a>
                                </li> --}}
                                    <li class="page-item {{ $articles->currentPage() == 1 ? ' disabled' : '' }}">
                                        <a class="page-link" href="{{ $articles->url(1) }}">
                                            <span aria-hidden="true">
                                                << </span>

                                                    {{-- Previous  « --}}
                                        </a>
                                    </li>

                                    @for ($i = 1; $i <= $articles->lastPage(); $i++)
                                        <li class="page-item {{ $articles->currentPage() == $i ? ' active' : '' }}">
                                            <a class="page-link" href="{{ $articles->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor
                                    <li
                                        class="page-item {{ $articles->currentPage() == $articles->lastPage() ? ' disabled' : '' }}">
                                        <a class="page-link" href="{{ $articles->url($articles->currentPage() + 1) }}">
                                            <span aria-hidden="true">>></span>
                                            {{-- Next --}}
                                        </a>
                                    </li>
                                    {{-- なくてもあってもいい部分 --}}
                                    {{-- <li class="page-item {{ ($articles->currentPage() == $articles->lastPage()) ? ' disabled' : '' }}">
                                    <a class="page-link" href="{{ $articles->url($articles->lastPage()) }}">Last Page</a>
                                </li> --}}
                                </ul>
                            @endif
                        </div>
                    </div>

                    <!-- .articles_main_contents -->
                    <div class="sidebar">
                        <p class="sidebar_title">
                            Category
                        </p>
                        <ul class="sidebar_list">
                            {{-- <p>全記事数：{{ $articles->total() }}</p> --}}
                            <li>
                                <a href="{{ route('front.article') }}">すべて
                                    ({{ $articles->total() }})
                            </li>

                            {{-- @foreach ($categories as $id => $name)
                                <li>
                                    <a href="{{ route('front.article', ['category_id' => $id]) }}"
                                        title="{{ $name }}">
                                        {{ $name }}
                                    </a>
                                </li>
                            @endforeach --}}
                            @foreach ($categorylist as $cg)
                                <li>
                                    <a href="{{ route('front.article', ['category_id' => $cg->id]) }}"
                                        title="{{ $cg->name }}">
                                        {{ $cg->name }}
                                        ({{ $cg->atricle_categories->count() }})
                                    </a>
                                </li>
                            @endforeach

                            {{-- @foreach ($categorylist as $sf)
                                <li>
                                    <a href="{{ route('front.article', ['category_id' => $id]) }}"
                                        title="{{ $name }}">
                                        {{ $sf->name }} ({{ $sf->articlesCount->count() }})
                                    </a>
                                    {{ $sf->name }} ({{ $sf->articles->count() }})
                                </li>
                            @endforeach --}}
                            {{-- <li><a href="#"></a>講習会</li>
                                <li><a href="#"></a>求人情報</li>
                                <li><a href="#"></a>コンペ</li>
                                <li><a href="#"></a>その他</li> --}}
                        </ul>
                    </div>
                    <!-- .sidebar -->
                </div>
                <!-- .sidebar_wrapper -->
            </div>
            <!-- .base_wrapper -->
        </div>
        <!-- .base_container -->
    </main>
@endsection
