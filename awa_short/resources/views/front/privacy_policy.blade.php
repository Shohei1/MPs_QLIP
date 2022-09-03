@extends('layouts.front_base')

@section('title', 'プライバシーポリシー')

{{-- CSS --}}
@section('css')
    <link rel="stylesheet" href="{{ asset('css/privacy_policy.css') }}">
@endsection

{{-- メイン --}}
@section('main')
    <main class="main">
        <div class="key_visual_wrapper">
            <img src="{{ asset('img/bridge.jpg') }}" alt="キービジュアル" class="key_visual">
            <h2 class="page_title">プライバシーポリシー</h2>
        </div>
        <span class="spacer_sm"></span>
        <section class="base_container">
            <div class="base_wrapper">
                <section class="policy_infomation">
                    <span class="spacer_sm"></span>
                    <h3 class="policy_heading">個人情報の取り扱いについて</h3>
                    <p class="policy_text">
                        本プライバシーポリシーは、『あわ☆ショート』（以下「本サイト」といいます。）
                        の各種サービス（本サイトによる情報提供、お問い合わせ等）において、本サイトを利用
                        する皆様の個人情報もしくはそれに準ずる情報を取り扱う際に、本サイトが遵守する方針を
                        示したものです。
                    </p>
                </section>
                <section class="policy_container">
                    <h4 class="policy_subheading">第1条&emsp;基本方針</h4>
                    <p class="policy_text">
                        本サイトでは、個人情報の重要性を認識し、個人情報を保護することが社会的責務であると考え、
                        個人情報に関する法令を遵守し、本サイトで取り扱う個人情報の取得、利用、管理を適正に行います。<br>
                        本サイトで収集した情報は、利用目的の範囲内で適切に取り扱います。
                    </p>
                </section>

                <section class="policy_container">
                    <h4 class="policy_subheading">第2条&emsp;収集する情報の範囲</h4>
                    <p class="policy_text">
                        （1）本サイトでは、インターネットドメイン名、IPアドレス、当サイトの閲覧等の情報
                        （以下「利用者の情報」という。）を自動的に収集します。なお、Cookie（
                        サーバ側で利用者を識別するために、サーバから利用者のブラウザに送信され、利用者のコンピュータに
                        蓄積される情報）は、ユーザビリティーの向上を目的とする内容に限定するものであり、個人情報は一切含みません。<br>
                        また、利用者のブラウザの設定によりCookieの機能を無効にすることもできます。<br><br>
                        （2）本サイトでは、お問い合わせページの入力フォームよりご連絡をいただいた場合に、氏名及びメールアドレスを収集します。
                    </p>
                </section>

                <section class="policy_container">
                    <h4 class="policy_subheading">第3条&emsp;利用目的</h4>
                    <p class="policy_text">
                        第2条の（1）において収集した情報は、本サイトが提供するサービスを円滑に運営するための参考として利用します。<br>
                        本サイトでは、利用状況を把握するためにGoogleAnalyticsを利用しています。
                        Google Analyticsは、Cookieを利用して利用者の情報を収集します。
                        Google Analytics利用規約は、
                        <a href="https://marketingplatform.google.com/about/analytics/terms/jp/">こちら</a>をご覧ください。<br>
                        第2条の（2）において収集した情報は、お問い合わせの回答や確認の連絡のために利用します。
                    </p>
                </section>
                <section class="policy_container">
                    <h4 class="policy_subheading">第4条&emsp;情報管理</h4>
                    <p class="policy_text">
                        利用者からご提供いただいた情報については、常に正確かつ最新の情報となるよう努めます。
                        本サイトは、個人情報の漏えいや滅失又は棄損を防止するために、適切なセキリュティ対策を実施して個人情報を保護します。
                        また、個人情報が不要となった場合には、すみやかに廃棄します。<br>

                        本サイトは、利用者からご提供いただいた個人情報を、不正アクセス、脅迫等の違法行為があった場合及びその他特別の理由のある場合を除き、
                        利用者本人の同意を得ることなく「第３条利用目的」以外の目的のために自ら利用し、又は第三者に提供いたしません。<br><br>

                        お問い合わせにより本サイトに送られた情報とそのメタデータは、サイト運営期間中は保存いたします。<br>
                        また、GoogleAnalyticsのCookieは26ヶ月間保持されます。利用者のブラウザの設定によりCookieの機能を無効にすることもできます。<br>
                        本サイトの管理人は、利用者から利用者本人の個人情報を「消去してほしい」というリクエストに応えることが出来ます。これには、管理や法律、
                        セキュリティ目的のために保持する義務がある情報は含まれません。また消去する際、利用者のメールアドレスに確認のメールが送られます。
                    </p>
                </section>

                <section class="policy_container">
                    <h4 class="policy_subheading">第5条&emsp;適用範囲</h4>
                    <p class="policy_text">
                        本プライバシーポリシーは、本サイトにおいてのみ適用されます。<br>
                        本サイトの外部リンク（他サイトへのリンク）先のサイトにおける個人情報の取扱いについては、リンク先のサイトが規定を定めています。<br>
                        リンク先のプライバシーポリシーをご確認下さい。
                    </p>
                </section>

                <section class="policy_container">
                    <h4 class="policy_subheading">第6条&emsp;内容の変更について</h4>
                    <p class="policy_text">
                        本サイトは、個人情報に関して適用される日本の法令を遵守するとともに、本プライバシーポリシーの内容を適宜見直し改善に努めていくため、
                        予告なく修正する場合がございます。<br>
                        修正した最新のプライバシーポリシーは常に本ページにて開示いたします。
                    </p>
                </section>
                <span class="spacer_sm"></span>
            </div>
        </section>
        <!-- .base_container -->
    </main>
@endsection
