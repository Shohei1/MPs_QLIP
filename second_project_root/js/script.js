function addData() {
    let btn = document.getElementById("myPeopleName").value;
    // console.log(btn);
    document.getElementById("nameOutput").textContent = btn;
    // console.log(btn);
    document.peopleInfo.reset();
    if (btn === "") {
        document.getElementById("nameOutput").textContent = "Yes I do!";
    }
}

// inputで入力したものを消す
function clearText() {
    // 最初に書いてたもの
    // let textForm = document.getElementById("myPeopleName");
    // console.log(textForm.value);
    // textForm.value = '';
    // formのクリアの方が簡単
    document.peopleInfo.reset();
}

//「重要じゃない」 jsページのコード
window.addEventListener("scroll", function () {
    const scrollHeader = document.getElementById("headerTop");
    scrollHeader.classList.toggle("scrolledHeader", window.scrollY > 50);
});

$(function () {
    $(".jsFirstContent").on({
        click: function () {
            $(".jsFirstContent").css("background-color", "#fec884");
            $("#colorChange h2").text("clicked!!");
            $("#clickChange h2").html(
                "ブラウザの<br>何が変わったか<br>間違い探し!"
            );
        },
        mouseover: function () {
            $(".jsFirstContent").css("background-color", "#ee7d5b");
            $("#clickChange h2").text("クリックしてみ！");
        },
        mouseout: function () {
            $(".jsFirstContent").css("background-color", "#57a5dd");
            $("#clickChange h2").html("クリックでも<br>変化します");
            // 字を戻すときに<br>を入れるのはできる？
        },
    });

    // クラスを二つ入れることは可能なのか？
    $(".firstContent").on({
        mouseover: function () {
            $(".firstContentText").text(`HTML&CSSで選んだのはこの三つ`);
            $(".secondContentText").text("JavaScriptで選んだのはこの三つ");
        },
        mouseout: function () {
            $(".firstContentText").text("'HTML&CSS' Here's What I Picked");
            $(".secondContentText").text("'JavaScript' Here's What I Picked");
        },
    });
    $(".secondContent").on({
        mouseover: function () {
            $(".firstContentText").text("HTML&CSSで選んだのはこの三つ");
            $(".secondContentText").text("JavaScriptで選んだのはこの三つ");
        },
        mouseout: function () {
            $(".firstContentText").text("'HTML&CSS' Here's What I Picked");
            $(".secondContentText").text("'JavaScript' Here's What I Picked");
        },
    });

    // 日本語に変える
    $(".intro_content").on({
        mouseover: function () {
            const japaneseText = `
            <p class = "introPageText">
                名前: 吉田昌平 <br>
                年齢: 28 <br>
                出身: 徳島 <br> <br>
                <span class = "fa-fade" > QLIPプログラミングスクールで </span><br>
                    ３ヶ月勉強してきました！これまではHTML・CSS・JavaScriptを学びました。この３ヶ月は思った以上に学ぶことが多く、想像していたよりもたくさんのことを学べたので、もっともっと勉強と練習を繰り返したいと思っています。訓練終了後にどんなスキル・能力が身についているか楽しみです！残り３ヶ月も頑張ります！</p>
            `;
            $(".introPageText").html(japaneseText);
        },
        mouseout: function () {
            const englishText = `
                Name: Shohei Yoshida <br>
                Age: 28 <br>
                Home: Tokushima <br> <br>
                I have been studying at <br> <span class = "fa-fade"> QLIP programming school </span> for the last
            almost
            three months! So far I have learned HTML, CSS and JavaScript! I was able to learn a lot more than
            what I had imagined so I cannot wait to learn more
            about computer programming and see what I will be able to create when I finish the school! :)
            `;
            $(".introPageText").html(englishText);
        },
    });
    // $(".btn").on({
    //     "click": function () {
    //         $("body").cursor(none);
    //         $(".secondContentText").text("JavaScriptで選んだのはこの三つ");
    //     },
    //     "mouseout": function () {
    //         $(".firstContentText").text("'HTML&CSS' Here's What I Picked");
    //         $(".secondContentText").text("'JavaScript' Here's What I Picked");
    //     }
    // })
});

// ドロップダウンの記述
// $(function () {
//     $('.c-icon').hover(function () {
//         $("ul:not(:animated)", this).slideDown();
//     }, function () {
//         $("ul.dropdwn_menu", this).slideUp();
//     });
// });

// カーソルの変更
$(function () {
    //カーソル要素の指定
    var cursor = $("#cursor");
    //ちょっと遅れてついてくるストーカー要素の指定
    var stalker = $("#stalker");

    //mousemoveイベントでカーソル要素を移動させる
    $(document).on("mousemove", function (e) {
        //カーソルの座標位置を取得
        var x = e.clientX;
        var y = e.clientY;
        //カーソル要素のcssを書き換える用
        cursor.css({
            opacity: "1",
            top: y + "px",
            left: x + "px",
        });
        //ストーカー要素のcssを書き換える用
        setTimeout(function () {
            stalker.css({
                opacity: "1",
                top: y + "px",
                left: x + "px",
            });
        }, 140); //カーソルより遅れる時間を指定
    });
});
