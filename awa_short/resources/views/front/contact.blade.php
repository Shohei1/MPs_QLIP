@extends('layouts.front_base')

@section('title', 'お問い合わせ')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('main')
    <main class="main">
        <div class="key_visual_wrapper">
            <img src="{{ asset('img/kv_dmv.png') }}" alt="" class="key_visual">
            <h2 class="page_title">お問い合わせ</h2>
        </div>
        <span class="spacer_sm"></span>
        <div class="base_container">
            <div class="base_wrapper">
                <!-- ここから画像下のコンテンツ作成開始 -->
                <div class="contact_send_container">
                    <form
                        action="https://docs.google.com/forms/u/0/d/e/1FAIpQLScTJbrGhJR_RsAZA26yAYZwoCcCWKZ24SThsoUqweM_Len9eQ/formResponse"
                        class="contact_send_form" name="contact_form" id="contact_form" target="dummyIframe">
                        <table class="contact_send_table">
                            <label for="" class="contact_send_form_label">
                                お名前
                                <input type="text" class="contact_send_form_input" name="entry.242465231" required>
                            </label>
                            <label for="" class="contact_send_form_label">
                                メールアドレス
                                <input type="email" class="contact_send_form_input" name="entry.691612924" required>
                            </label>
                            <label for="" class="contact_send_form_label">
                                お問い合わせ内容
                                <textarea name="entry.999739437" id="" class="contact_send_form_textarea" required></textarea>
                            </label>
                        </table>
                        <div class="contact_send_personal">
                            <h4 class="contact_send_personal_title">個人情報の取り扱いについて</h4>
                            <label for="" class="contact_send_personal_label">
                                下記「プライバシーポリシー」に同意する
                                <input type="checkbox" name="entry.1668985059" id=""
                                    class="contact_send_personal_input" required>
                            </label>
                            <h5 class="contact_send_personal_sub_title">
                                詳細については「プライバシーポリシー」をご覧ください。</h5>
                            <p class="contact_send_personal_sub_article">
                                上記「個人情報の取り扱いについて」に同意いただける場合は、「同意する」にチェックした
                                上で「この内容で送信する」をボタンを押して下さい。</p>
                        </div>
                        <div class="inversion_button_layout">
                            <button type="submit" class="inversion_button">
                                <span>送信する</span>
                                <span>送信する</span>
                            </button>
                        </div>
                        <iframe name="dummyIframe" style="display:none;" onload="showThxMessage();"></iframe>
                    </form>
                </div>
            </div>
        </div>
        <!-- .base_container -->
    </main>
@endsection

@section('js')
    <script src="{{ asset('js/contact.js') }}"></script>
@endsection
