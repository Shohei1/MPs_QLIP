{{-- author: kazuki sakuragi --}}

{{-- レイアウト読み込み --}}
@extends('layouts.back_base')

{{-- タイトル --}}
@section('title', 'あわショート管理画面')

{{-- メインコンテンツ --}}
@section('content')
    <div class="sidebar_main_contents">
        <form action="{{ route('back.back_game_update', ['id' => $game->id]) }}" method="POST">
            <table>
                @csrf
                <tr>
                    <th>ゲーム名</th>
                    <th>OS</th>
                    <th>ソフトウェア</th>
                    <th>難易度</th>
                    <th>ゲーム説明文</th>
                    <th>制限時間</th>
                    <th>問題数</th>
                    <th>種類</th>
                    <th>フラッグ</th>
                </tr>
                <tr>
                    <td><input type="text" name="name" id="name" value=" {{ $game->name }}"></td>
                    <td>
                        <select name="os_types_id" id="os_types_id" value="{{ old('os_types_id') }}">
                            @foreach ($os_types as $id => $name)
                                <option value={{ $id }}
                                    @if ($game->os_types_id == $id)
                                        selected
                                    @endif
                                >{{ $name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select name="software_id" id="software_id" value="{{ old('software_id') }}">
                            @foreach ($softwares as $id => $name)
                                <option value={{ $id }}
                                    @if ($game->software_id == $id)
                                        selected
                                    @endif
                                >{{ $name }}</option>
                            @endforeach

                        </select>
                    </td>
                    <td>
                        <select name="difficulty_id" id="difficulty_id">
                            @foreach ($difficulties as $id => $name)
                                <option value={{ $id }}
                                    @if ($game->difficulty_id == $id)
                                        selected
                                    @endif
                                >{{ $name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <textarea name="description" id="description" cols="30" rows="5">
                            @if ($game->description !== 'null')
                                {{ $game->description }}
                            @endif
                        </textarea>
                    </td>
                    <td>
                        <input type="text" name="time" id="time" value="{{ $game->time }}">
                    </td>
                    <td>
                        <input type="text" name="number_of_questions" id="number_of_questions" value="{{ $game->number_of_questions }}">
                    </td>
                    <td>
                        <select name="type" id="type">
                            <option value=1
                            @if ($game->type == 1)
                                    selected
                            @endif
                            >キーボード</option>
                            <option value=2
                            @if ($game->type == 2)
                                    selected
                            @endif
                            >クイズ</option>
                        </select>
                    </td>
                    <td>
                        <select name="is_show" id="is_show">
                            <option value=1
                            @if ($game->is_show == 1)
                                    selected
                            @endif
                            >表示する</option>
                            <option value=0
                            @if ($game->is_show == 0)
                                    selected
                            @endif>表示しない</option>
                        </select>
                    </td>
                    <td>
                        <button type="submit" class="btn btn-success" onclick="return confirm('下記の内容でよろしいですか？')">
                            {{ __('編集確定') }}
                        </button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
@endsection
