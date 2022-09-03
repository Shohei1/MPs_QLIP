{{-- author: kazuki sakuragi --}}

{{-- レイアウト読み込み --}}
@extends('layouts.back_base')

{{-- タイトル --}}
@section('title', 'あわショート管理画面')


{{-- メインコンテンツ --}}
@section('content')
    <div class="sidebar_main_contents">
        <form action="{{ route('back.back_game_store') }}" method="POST">
            @csrf
            <table>
                <tr>
                    <th>ゲーム名</th>
                    <th>OS</th>
                    <th>ソフトウェア</th>
                    <th>難易度</th>
                    <th>ゲーム説明文</th>
                    <th>制限時間</th>
                    <th>問題数</th>
                    <th>種類</th>
                </tr>
                <tr>
                    <td><input type="text" name="name" id="name"></td>
                    <td>
                        <select name="os_types_id" id="os_types_id" value="{{ old('os_types_id') }}">
                            @foreach ($os_types as $id => $name)
                                <option value={{ $id }}>{{ $name }}</option>
                            @endforeach

                        </select>
                    </td>
                    <td>
                        <select name="software_id" id="software_id" value="{{ old('software_id') }}">
                            @foreach ($softwares as $id => $name)
                                <option value={{ $id }}>{{ $name }}</option>
                            @endforeach

                        </select>
                    </td>
                    <td>
                        <select name="difficulty_id" id="difficulty_id">
                            @foreach ($difficulties as $id => $name)
                                <option value={{ $id }}>{{ $name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <textarea name="description" id="description" cols="30" rows="5"></textarea>
                    </td>
                    <td>
                        <input type="text" name="time" id="time">
                    </td>
                    <td>
                        <input type="text" name="number_of_questions" id="number_of_questions">
                    </td>
                    <td>
                        <select name="type" id="type">
                            <option value=1>キーボード</option>
                            <option value=2>クイズ</option>
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
