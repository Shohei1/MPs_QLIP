{{-- author: kazuki sakuragi --}}

@extends('layouts.back_base')

@section('title', 'あわショート管理画面')

{{-- メインコンテンツ --}}
@section('content')

    {{-- @php
    $uploaddir = '/var/www/uploads/';
    $upload = $uploaddir . basename($_FILES['userfile']['name']);
    move_uploaded_file($_FILES['userfile']['tmp'], $upload);
    @endphp --}}

    <div class="sidebar_main_contents">
        <form enctype="multipart/form-data" action="{{ route('back.back_article_store') }}" method="POST">
            @csrf
            <table>
                <tr>
                    <th>カテゴリ</th>
                    <th width="200px">サムネイル</th>
                    <th>タイトル</th>
                    <th>内容</th>
                    {{-- <th>アイコン</th> --}}
                    <th>フラッグ</th>
                </tr>
                <tr>
                    <td>
                        <select name="article_category_id" id="article_category_id" value="{{ old('article_category_id') }}">
                            @foreach ($categories as $id => $name)
                                <option value={{ $id }}>{{ $name }}</option>
                            @endforeach

                        </select>
                    </td>
                    <td>
                        <input type="file" name="thumbnail" id="thumbnail">
                    </td>
                    <td>
                        <input type="text" name="title" id="title">
                    </td>
                    <td>
                        <textarea name="content" id="content" cols="30" rows="10"></textarea>
                    </td>

                    {{-- <td>
                        <input type="text" name="icon_id" id="icon_id">
                    </td> --}}                 
                        {{-- <input type="h" name="name" value="value" />
                        アップロード: <input name="userfile" type="file" />
                        <input type="submit" value="ファイル送信" /> --}}
                    <td>
                        <select name="is_show" id="is_show">
                            <option value=1>表示</option>
                            <option value=0>非表示</option>
                        </select>
                    </td>
                </tr>
            </table>
            <button type="submit" class="btn btn-success" onclick="return confirm('下記の内容でよろしいですか？')">
                {{ __('新規追加') }}
            </button>
        </form>
    </div>
@endsection
