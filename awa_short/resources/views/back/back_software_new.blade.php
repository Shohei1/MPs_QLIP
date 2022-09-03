{{-- author: kazuki sakuragi --}}

@extends('layouts.back_base')

@section('title', 'あわショート管理画面')

{{-- メインコンテンツ --}}
@section('content')
    <div class="sidebar_main_contents">
        <form action="{{ route('back.back_software_store') }}" method="POST">
            @csrf
            <table>
                <tr>
                    <th>ソフトウェア</th>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="name" id="name">
                    </td>
                </tr>
            </table>
            <button type="submit" class="btn btn-success" onclick="return confirm('下記の内容でよろしいですか？')">
                {{ __('新規追加') }}
            </button>
        </form>
    </div>
@endsection
