{{-- editor: kazuki sakuragi --}}

@extends('layouts.back_base')

@section('title', 'あわショート管理画面')

{{-- メインコンテンツ --}}
@section('content')
    <div class="sidebar_main_contents">
        <form action="{{ route('back.back_software_update', ['id' => $software->id]) }}" method="POST">
            @csrf
            <table>
                <tr>
                    <td>ソフトウェア名</td>
                    <td>フラッグ</td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="name" id="name" value=" {{ $software->name }}">
                        {{-- <select name="software" id="software">
                            <option value="VSCode">VSCode</option>
                            <option value="Photoshop">Photoshop</option>
                            <option value="Illustrator">Illustrator</option>
                            <option value="Excel">Excel</option>
                            <option value="Word">Word</option>
                        </select> --}}
                    </td>
                    <td>
                        <select name="is_show" id="is_show">
                            <option value=1>表示</option>
                            <option value=0>非表示</option>
                        </select>
                    </td>
                </tr>
            </table>
            <button type="submit" class="btn btn-success" onclick="return confirm('下記の内容でよろしいですか？')">
                {{ __('更新確定') }}
            </button>
            {{-- <input type="submit" value="編集する"> --}}
        </form>
    </div>
@endsection
