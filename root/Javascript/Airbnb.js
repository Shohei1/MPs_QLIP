'use strict';

window.addEventListener("scroll", function () {

    // ヘッダーを変数の中に格納する
    const headerVanish = document.querySelector("header");

    // 100px以上スクロールしたらヘッダーに「scroll-nav」クラスをつける
    headerVanish.classList.toggle("scroll-nav", window.scrollY > 0);

});