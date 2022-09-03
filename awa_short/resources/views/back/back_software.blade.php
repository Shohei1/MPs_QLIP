{{-- レイアウト読み込み --}}
@extends('layouts.back_base')

{{-- タイトル --}}
@section('title', 'あわショート管理画面')

{{-- メインコンテンツ --}}
@section('content')
    <div class="sidebar_main_contents">
        {{-- コンポーネント: 検索バーの読み込み --}}
        <div class="searchbar_wrapper">
            @component('components.back_searchbar')
                {{-- 新規作成ボタンを埋め込む --}}
                @slot('additional_button')
                    {{-- {{ $button }} --}}
                @endslot
            @endcomponent
            <a href="back_software_new" onclick="return confirm('新規作成しますか？')">新規作成</a>
        </div>
        <table border="1">
            <tr>
                <th class="th_sticky">ID</th>
                <th class="th_sticky">ソフトウェア名</th>
                <th class="th_sticky">フラッグ</th>
            </tr>
            @foreach ($softwares as $software)
                {{-- <td>を表示 --}}
                <tr>
                    <td>{{ $software->id }}</td>
                    <td>{{ $software->name }}</td>
                    {{-- フラッグの表示か非表示かを示す --}}
                    @if ($software->is_show == 1)
                        <td> 表示中 </td>
                    @else
                        <td> 非表示中
                        <td>
                    @endif
                    <td><a href="{{ route('back.back_software_edit', $software->id) }}" class="btn btn-info">編集</a></td>
                    <form action="{{ route('back.back_software_delete', $software->id) }}" method="POST">
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
