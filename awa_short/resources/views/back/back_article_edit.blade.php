{{-- author: kazuki sakuragi --}}

{{-- レイアウト読み込み --}}
@extends('layouts.back_base')

{{-- タイトル --}}
@section('title', 'あわショート管理画面')

{{-- メインコンテンツ --}}
@section('content')

    @php
    $path = '../img/article_thumbnail/';
    @endphp

    <div class="sidebar_main_contents">
        <form action="{{ route('back.back_article_update', ['id' => $article->id]) }}" method="POST">
            @csrf
            <table>
                <tr>
                    <th>カテゴリ</th>
                    <th>サムネイル</th>
                    <th>タイトル</th>
                    <th>内容</th>
                    {{-- <th>アイコン</th> --}}
                    <th>フラッグ</th>
                </tr>
                <tr>
                    <td>
                        <select name="article_category_id" id="article_category_id" value="{{ old('article_category_id') }}">
                            @foreach ($categories as $id => $name)
                                <option value={{ $id }} @if ($article->article_category_id == $id) selected @endif>
                                    {{ $name }}</option>
                            @endforeach

                        </select>
                    </td>
                    <td>
                        <input type="file" name="thumbnail" id="thumbnail">
                        現在のサムネイル:<input type="text" name="current_thumbnail" id="current_thumbnail"
                            value="{{ $article->thumbnail }}" readonly>
                    </td>
                    <td>
                        <input type="text" name="title" id="title" value="{{ $article->title }}">
                    </td>
                    <td>
                        <textarea name="content" id="content" cols="30" rows="10">{{ $article->content }}</textarea>
                    </td>
                    {{-- <td>
                        <input type="text" name="icon_id" id="icon_id">
                    </td> --}}
                    <td>
                        <select name="is_show" id="is_show">
                            <option value=1 @if ($article->is_show == 1) selected @endif>表示</option>
                            <option value=0 @if ($article->is_show == 0) selected @endif>非表示</option>
                        </select>
                    </td>
                    <td>
                        <button type="submit" class="btn btn-success" onclick="return confirm('下記の内容でよろしいですか？')">
                            {{ __('更新確定') }}
                        </button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
@endsection
