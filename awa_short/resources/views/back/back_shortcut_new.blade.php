{{-- author: kazuki sakuragi --}}

@extends('layouts.back_base')

@section('title', 'あわショート管理画面')

{{-- メインコンテンツ --}}
@section('content')
    <div class="sidebar_main_contents">
        <form action="{{ route('back.back_shortcut_store') }}" method="POST">
            @csrf
            <table>
                <tr>
                    <th>OS</th>
                    <th>ソフトウェア</th>
                    <th>難易度</th>
                    <th>キー1</th>
                    <th>キー2</th>
                    <th>キー3</th>
                    <th>キー4</th>
                    <th>説明</th>
                    {{-- <th>フラッグ</th> --}}
                    <th>使用キー</th>
                </tr>
                <tr>
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
                        <input type="text" name="key" id="key">
                        {{-- <input type="text" name="key2" id="key2"> --}}
                    </td>
                    <td>
                        <input type="text" name="key2" id="key2">
                    </td>
                    <td>
                        <input type="text" name="key3" id="key3">
                    </td>
                    <td>
                        <input type="text" name="key4" id="key4">
                    </td>
                    <td>
                        <textarea name="description" id="description" cols="30" rows="10"></textarea>
                    </td>
                    {{-- <td>
                        <select name="is_show" id="is_show">
                            <option value=1>表示</option>
                            <option value=0>非表示</option>
                        </select>
                    </td> --}}
                    <td>
                        <select name="usage" id="usage">
                            <option value=0>非使用</option>
                            <option value=1>クイズだけ</option>
                            <option value=2>キーボードだけ</option>
                            <option value=3>両方で使用</option>
                        </select>
                    </td>
                </tr>
            </table>
            <button type="submit" class="btn btn-success" onclick="return confirm('下記の内容でよろしいですか？')">
                {{ __('新規追加') }}
            </button>
            {{-- <input type="submit" value="新規追加"> --}}
        </form>
    </div>
@endsection
