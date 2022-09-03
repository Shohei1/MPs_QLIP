{{-- author:sakuragi --}}
@extends('layouts.back_base')

@section('content')
    <div class="sidebar_main_contents">
        <div class="back_login_box">
            <form action="back_article" method="post">
                @csrf
                <div class="back_login_inner">
                    <div class="back_login_item">
                        <label for="email">　　 email:</label>
                        <input type="text" name="email" id="email">
                    </div>
                    <div class="back_login_item">
                        <label for="password">パスワード:</label>
                        <input type="password" name="password" id="password">
                    </div>
                </div>
                <input type="submit" value="ログインする">
            </form>
        </div>

        @isset($msg)
            <p class="failed_message">{{ $msg }}</p>
        @endisset

    </div>
@endsection
