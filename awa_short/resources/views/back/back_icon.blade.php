{{-- author: kazuki sakuragi --}}

{{-- デバック用phpスクリプト --}}
@php
$data = [
    0 => [
        'id' => 0,
        'image' => 'http://awa_short/sample.jpg',
        'name' => 'sample.jpg',
        'flag' => 1,
    ],
    1 => [
        'id' => 1,
        'image' => 'http://awa_short/sample1.jpg',
        'name' => 'sample1.jpg',
        'flag' => 1,
    ],
];
@endphp

{{-- レイアウト読み込み --}}
@extends('layouts.back_base')

{{-- タイトル --}}
@section('title', 'あわショート管理画面')

{{-- ボタンを作るための数 --}}
@php
$count = 0;
@endphp

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
            <a href="back_icon_new" onclick="return confirm('新規作成しますか？')">新規作成</a>
        </div>
        <table border="1">
            <tr>
                <th class="th_sticky">アイコン</th>
                <th class="th_sticky">名前</th>
                <th class="th_sticky">フラッグ</th>
            </tr>
            @foreach ($icons as $icon)
                @php
                    $path = '../img/icon/';
                @endphp
                {{-- <td>を表示 --}}
                <tr>
                    <td><img src="{{ $path }}{{ $icon->image }}" alt="{{ $icon->image }}"></td>
                    <td>{{ $icon->name }}</td>
                    @if ($icon->is_show == 1)
                            <td> 表示中 </td>
                        @else
                            <td> 非表示中 <td>
                        @endif
                    <td><a
                            href="{{ route('back.back_icon_edit', $icon->id) }}
                        "class="btn btn-info">編集</a>
                    </td>
                    <td>
                        <form action="{{ route('back.back_icon_delete', $icon->id) }}" method="POST">
                            @csrf
                            <button onclick="return confirm('削除しますか？')">削除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
