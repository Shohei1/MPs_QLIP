{{-- auther: kazuki sakuragi --}}

<div class="searchbar">
    <input class="back_search_form" type="text">
    <img class="back_search_icon" src="{{ asset('img/search_icon.jpg') }}" alt="search_icon">

    @empty('additional_button')
        <button>{{ $button }}</button>
    @endempty
</div>
