
{{-- コレクションの中身を取り出してる --}}
@foreach ($games as $game)

    {{-- ソフトウェア毎に取り出して、ソフトウェアが変わると改行する --}}
    @foreach ($game as $data)
    {{  $data->softwares->name }}
    @endforeach
    ********************
    <br>

@endforeach


<li><a href="{{ route('front.new_game_select') }}">全て</a></li>
@foreach ($softwares as $id => $name)
<li class="shortcutlist_sidebar_list_li">
    <a href="{{ route('front.new_game_select', ['$software_id'=>$id]) }}" title="{{ $name }}">
        {{ $name }}
    </a>
</li>
@endforeach

{{-- @php

    dd($score)

@endphp --}}
<br>

{{-- @foreach ($score as $score)

    {{ $score->score }}

@endforeach --}}
