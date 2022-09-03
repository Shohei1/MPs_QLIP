{{-- author: sakuragi --}}
{{-- 追記：佐伯 --}}
@extends('layouts.front_base')

@section('title', 'ショートカット一覧')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/shortcutlist.css') }}">
@endsection

@section('main')
    <main class="main">
        <div class="key_visual_wrapper">
            <img src="{{ asset('img/IT_image.jpeg') }}" alt="key_visual" class="key_visual">
            <h2 class="page_title">ショートカット一覧</h2>
        </div>
        <span class="spacer_sm"></span>
        <div class="base_container">
            <div class="base_wrapper">
                <!-- ここから画像下のコンテンツ作成開始 -->
                <div class="sidebar_wrapper">
                    <div class="sidebar_main_contents">
                        <h3 class="heading">
                            {{-- TODO: カテゴリー分け --}}

                            {{-- @isset($category)
                                {{ $category }}
                            @else
                                Windows/Mac
                            @endisset --}}

                            @if ($software_id == 0)
                                Windows/Mac
                            @else
                                @if ($os_types_id == 1)
                                    Windows：
                                @else
                                    Mac：
                                @endif
                                {{ $softwares[$software_id] }}
                            @endif

                        </h3>


                        {{-- softwareが選択されてない時の表示 --}}
                        @if ($software_id == 0) {{-- idがなかったら、MacとWindowsのキーを表示 --}}
                            {{-- <p class="shortcut_counts">件数: {{ $count }}</p> --}}
                            <table class="shortcutlist_list_table">
                                <tr class="shortcutlist_list_table_tr">
                                    <th class="shortcutlist_list_table_th">キー</th>
                                    <th class="shortcutlist_list_table_th">用途</th>
                                </tr>

                                @foreach ($allShortcuts as $allShortcut)
                                    <tr class="shortcutlist_list_table_tr">
                                        <td class="shortcutlist_list_table_td">
                                            {{ $allShortcut->key }} {{ $allShortcut->key2 }} {{ $allShortcut->key3 }}
                                            </>
                                        <td class="shortcutlist_list_table_td">{{ $allShortcut->description }}</td>
                                    </tr>
                                @endforeach
                            @else
                                {{-- softwareが選択されている時の表示 --}}
                                {{-- <p class="shortcut_counts">件数: {{ $shortcuts->count() }}</p> --}}
                                <table class="shortcutlist_list_table">
                                    <tr class="shortcutlist_list_table_tr">
                                        <th class="shortcutlist_list_table_th_title">キー</th>
                                        <th class="shortcutlist_list_table_th_title">用途</th>
                                    </tr>

                                    @foreach ($shortcuts as $shortcut)
                                        <tr class="shortcutlist_list_table_tr">
                                            <td class="shortcutlist_list_table_td">
                                                {{ $shortcut->key }} {{ $shortcut->key2 }} {{ $shortcut->key3 }}
                                            </td>
                                            <td class="shortcutlist_list_table_td">{{ $shortcut->description }}</td>
                                        </tr>
                                    @endforeach
                        @endif

                        </table>
                        {{-- <div class="pagination_wrapper"> --}}


                        {{-- ペジネーションのsoftwareが選択されてない時の表示 --}}
                        {{-- @if ($software_id == 0) --}}

                        {{-- softwareが選択されている時の表示 --}}
                        {{-- @else --}}
                        {{-- @if ($shortcuts->lastPage() > 1)
                                    <ul class="pagination"> --}}
                        {{-- なくてもあってもいい部分 --}}
                        {{-- <li class="page-item {{ ($articles->currentPage() == 1) ? ' disabled' : '' }}">
                                        <a class="page-link" href="{{ $articles->url(1) }}">First Page</a>
                                        </li> --}}
                        {{-- <li class="page-item {{ $shortcuts->currentPage() == 1 ? ' disabled' : '' }}">
                                            <a class="page-link" href="{{ $shortcuts->url(1) }}">
                                                <span aria-hidden="true">
                                                    << </span> --}}
                        {{-- software_id=3&os_types_id=2 --}}
                        {{-- Previous --}}
                        {{-- </a>
                                        </li>

                                        @for ($i = 1; $i <= $shortcuts->lastPage(); $i++)
                                            <li class="page-item {{ $shortcuts->currentPage() == $i ? ' active' : '' }}">
                                                <a class="page-link"
                                                    href="{{ $shortcuts->url($i) }}">{{ $i }}</a>
                                            </li>
                                        @endfor

                                        <li
                                            class="page-item {{ $shortcuts->currentPage() == $shortcuts->lastPage() ? ' disabled' : '' }}">
                                            <a class="page-link"
                                                href="{{ $shortcuts->url($shortcuts->currentPage() + 1) }}">
                                                <span aria-hidden="true">>></span> --}}
                        {{-- Next » --}}
                        {{-- </a>
                                        </li> --}}
                        {{-- なくてもあってもいい部分 --}}
                        {{-- <li class="page-item {{ ($articles->currentPage() == $articles->lastPage()) ? ' disabled' : '' }}">
                                        <a class="page-link" href="{{ $articles->url($articles->lastPage()) }}">Last Page</a>
                                        </li> --}}
                        {{-- </ul>
                                @endif

                            @endif
                        </div> --}}

                        {{-- <table class="shortcutlist_list_table">
                            <tr class="shortcutlist_list_table_tr">
                                <th class="shortcutlist_list_table_th_title">キー</th>
                                <th class="shortcutlist_list_table_th_title">用途</th>
                            </tr>

                            @foreach ($mac_shortcuts as $shortcut)
                                <tr class="shortcutlist_list_table_tr">
                                    <th class="shortcutlist_list_table_th">
                                        {{ $shortcut->key }} {{ $shortcut->key2 }} {{ $shortcut->key3 }}
                                    </th>
                                    <th class="shortcutlist_list_table_th">{{ $shortcut->description }}</th>
                                </tr>
                            @endforeach
                        </table> --}}

                    </div>
                    <div class="sidebar">
                        <p class="sidebar_title">
                            Category
                        </p>
                        <div class="sidebar_wrapper">
                            <div class="sidebar_category_wrapper">
                                <p class="shortcutlist_sidebar_category_title">Windows</p>
                                <ul class="shortcutlist_sidebar_list">
                                    {{-- <br>
                                    <li>{{ $shortcuts->total() }}件 登録</li> --}}
                                    {{-- @foreach ($softwares as $id => $name)
                                        <li class="shortcutlist_sidebar_list_li">
                                            <a href="{{ route('front.shortcut_list', ['software_id' => $id, 'os_types_id' => 1]) }}"
                                                title="{{ $name }}">
                                                {{ $name }}
                                            </a>
                                        </li>
                                    @endforeach --}}

                                    @foreach ($softwarelist as $sf)
                                        @if ($sf->shortcuts_win->count() > 0)
                                            <li class="shortcutlist_sidebar_list_li">
                                                <a href="{{ route('front.shortcut_list', ['software_id' => $sf->id, 'os_types_id' => 1]) }}"
                                                    title="{{ $sf->name }}">
                                                    {{ $sf->name }}<br>({{ $sf->shortcuts_win->count() }})
                                                </a>
                                            </li>
                                        @else
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="sidebar_category_wrapper">
                                <p class="shortcutlist_sidebar_category_title">Mac</p>
                                <ul class="shortcutlist_sidebar_list">
                                    {{-- @foreach ($softwares as $id => $name) --}}
                                    @foreach ($softwarelist as $sf)
                                        @if ($sf->shortcuts_mac->count() > 0)
                                            <li class="shortcutlist_sidebar_list_li">
                                                <a href="{{ route('front.shortcut_list', ['software_id' => $sf->id, 'os_types_id' => 2]) }}"
                                                    title="{{ $sf->name }}">
                                                    {{ $sf->name }}<br>({{ $sf->shortcuts_mac->count() }})
                                                </a>
                                            </li>
                                        @else
                                        @endif
                                    @endforeach

                                    {{-- <li>
                                @foreach ($softwarelist as $sf)
                                    @if ($sf->shortcuts->count() > 0)
                                        <li>{{ $sf->name }}({{ $sf->shortcuts->count() }})</li>
                                    @endif
                                @endforeach
                            </li> --}}

                                    {{-- <li class="shortcutlist_sidebar_list_li">
                                        <a href="{{ route('front.shortcut_list', ['software_id' => 5, 'os_types_id' => 2]) }}" title="{{ $name }}"> PowerPoint
                                        </a>
                                    </li>
                                    <li class="shortcutlist_sidebar_list_li">
                                        <a href="{{ route('front.shortcut_list', ['software_id' => 6, 'os_types_id' => 2]) }}" title="{{ $name }}"> Excel
                                        </a>
                                    </li>
                                    <li class="shortcutlist_sidebar_list_li">
                                        <a href="{{ route('front.shortcut_list', ['software_id' => 7, 'os_types_id' => 2]) }}" title="{{ $name }}"> Word
                                        </a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .base_container -->
    </main>
@endsection
