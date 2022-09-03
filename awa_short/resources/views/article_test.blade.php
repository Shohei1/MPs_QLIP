@extends('layouts.front_base')

@section('content')
    @foreach ($articles as $article)
        {{-- 現在のループ数を$countに代入 --}}
        @php
            $count = $loop->count;
        @endphp

        <body>
            <div>
                <img src="{{ $article['icon'] }}" alt="カード画像">
                <div>{{ $article['article_category_id'] }}</div>
            </div>
            <div>
                <h4>{{ $article['title'] }}</h4>
                <span>{{ $article['created_at'] }}</span>
            </div>
        </body>
    @endforeach
@endsection
{{-- カテゴリ・アイコン・タイトル --}}
