{{-- editor: kazuki sakuragi --}}

@extends('layouts.back_base')

@section('title', 'あわショート管理画面')

{{-- メインコンテンツ --}}
@section('content')
    <div class="sidebar_main_contents">
        <form action="{{ route('back.back_shortcut_update', ['id' => $shortcut->id]) }}" method="POST">
            {{-- {{ route{'shortcuts.update', ['id'=>$shortcuts->shortcuts_id]} }} --}}
            <table>
                @csrf
                <tr>
                    <th>OS</th>
                    <th>ソフトウェア名</th>
                    <th>難易度</th>
                    <th>キー1</th>
                    <th>キー2</th>
                    <th>キー3</th>
                    <th>キー4</th>
                    <th>説明</th>
                    <th>フラッグ</th>
                    <th>使用キー</th>
                </tr>
                <tr>
                    <td>
                        <select name="os_types_id" id="os_types_id" value="{{ old('os_types_id') }}">
                            @foreach ($os_types as $id => $name)
                                <option value={{ $id }}
                                    @if ($shortcut->os_types_id == $id)
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
                                    @if ($shortcut->software_id == $id)
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
                                    @if ($shortcut->difficulty_id == $id)
                                        selected
                                    @endif
                                >{{ $name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <input type="text" name="key" id="key" value="{{ $shortcut->key }}">
                    </td>
                    <td>
                        <input type="text" name="key2" id="key2" value="{{ $shortcut->key2 }}">
                    </td>
                    <td>
                        <input type="text" name="key3" id="key3" value="{{ $shortcut->key3 }}">
                    </td>
                    <td>
                        <input type="text" name="key4" id="key4" value="{{ $shortcut->key4 }}">
                    </td>
                    <td>
                        <textarea name="description" id="description" cols="30" rows="10">{{ $shortcut->description }}</textarea>
                    </td>
                    <td>
                        <select name="is_show" id="is_show">
                            <option value=1
                                @if ($shortcut->is_show == 1)
                                    selected
                                @endif
                            >表示</option>
                            <option value=0
                                @if ($shortcut->is_show == 0)
                                    selected
                                @endif
                            >非表示</option>
                        </select>
                    </td>
                    <td>
                        <select name="usage" id="usage">
                            <option value=0
                                @if ($shortcut->usage == 0)
                                    selected
                                @endif
                            >非使用</option>

                            <option value=1
                                @if ($shortcut->usage == 1)
                                    selected
                                @endif
                            >クイズだけ</option>

                            <option value=2
                                @if ($shortcut->usage == 2)
                                    selected
                                @endif
                            >キーボードだけ</option>

                            <option value=3
                                @if ($shortcut->usage == 3)
                                    selected
                                @endif
                                >両方で使用</option>
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
