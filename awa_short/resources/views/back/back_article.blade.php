{{-- author: kazuki sakuragi --}}



@extends('layouts.back_base')

@section('title', 'あわショート記事管理画面')


{{-- メインコンテンツ --}}
@section('content')
    <div class="sidebar_main_contents">
        <div class="searchbar_wrapper">
            {{-- コンポーネント: 検索バーの読み込み --}}
            @component('components.back_searchbar')
                {{-- 新規作成ボタンを埋め込む --}}
                @slot('additional_button')
                    {{-- {{ $button }} --}}
                @endslot
            @endcomponent
            <a href="back_article_new" onclick="return confirm('新規作成しますか？')">新規作成</a>
        </div>
        <table border="1">
            <tr>
                <th class="th_sticky">ID</th>
                <th width="100px" class="th_sticky">カテゴリ</th>
                <th width="200px" class="th_sticky">サムネイル</th>
                <th width="300px" class="th_sticky">タイトル</th>
                {{-- <th>概要</th> --}}
                <th class="th_sticky">内容</th>
                {{-- <th class="th_sticky">アイコン</th> --}}
                <th class="th_sticky">フラッグ</th>
            </tr>
            @foreach ($articles as $article)
                @php
                    // $path = 'http://localhost/awa_shortcut/' . 'public/storage/article_thumbnail/';
                    $path = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . '/awa_shortcut/public/storage/article_thumbnail/';
                @endphp
                {{-- <td>を表示 --}}
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->articleCategories->name }}</td>
                    {{-- <td>{{ $article['thumbnail'] }}</td> --}}
                    <td>
                        <img src="storage/article_thumbnail/{{ $article['thumbnail'] }}" alt="{{ $article['title'] }}">
                        {{-- <img src="{{ $path }}{{ $article['thumbnail'] }}" alt="{{ $article['title'] }}"> --}}
                        {{-- <img src="{{ asset('article_thumbnail' . $article->image) }}" alt="{{ $article['title'] }}"> --}}
                    </td>

                    <td>{{ $article->title }}</td>
                    {{-- <td>{{ $article['summary'] }}</td> --}}
                    <td>{!! nl2br(e($article->content)) !!}</td>
                    {{-- <td>{{ $article->content }}</td> --}}
                    {{-- <td>{{ $article->icon_id }}</td> --}}
                    {{-- フラッグの表示か非表示かを示す --}}
                    @if ($article->is_show == 1)
                        <td> 表示中 </td>
                    @else
                        <td> 非表示中
                        <td>
                    @endif

                    <td><a
                            href="{{ route('back.back_article_edit', $article->id) }}
                        "class="btn btn-info">編集</a>
                    </td>
                    <form action="{{ route('back.back_article_delete', $article->id) }}" method="POST">
                        @csrf
                        <td>
                            <button onclick="return confirm('削除しますか？')">削除</button>
                        </td>
                    </form>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
