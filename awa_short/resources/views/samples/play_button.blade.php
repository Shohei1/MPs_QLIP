<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ショートカット練習</title>

    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/main.js"></script>

</head>
<body>
    <div id="wrap" class="play">
        <section class="container">
            <!-- 開始画面領域 -->
            <div class="game_start">
                <button id="start">練習スタート</button>
            </div>

            <div class="timer">
                <p id="timer">経過時間：</p>
            </div>
            <!-- 練習問題表示領域 -->
            <div class="question mb50">
                <p id="ex">ショートカット問題ショートカット問題</p>
            </div>

            <!-- 選択ボタン領域 -->
            <div class="awswer">
                <button class="btns">Ctrl A</button>
                <button class="btns">Ctrl B</button>
                <button class="btns">Ctrl C</button>
                <button class="btns">Ctrl D</button>
            </div>

            <!-- 練習結果表示領域 -->
            <div class="game_end">
                <h2>練習結果</h2>
                <table id="result" border="1">
                    <tr>
                        <th>No</th>
                        <th>問題</th>
                        <th>選択</th>
                        <th>判定</th>
                    </tr>
                </table>

                <p id="correct">正解：</p>
                <p id="rate">正確率：</p>
                <p id="comment">評価：</p>
                <button id="retry">もう一回練習</button>
                <button id="back">メニューに戻る</button>
            </div>
        </section>
    </div>
</body>
</html>
