<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>キーボード入力</title>
    <style>
        #output {
            font-size: 2em;
            color: brown;
        }

    </style>
    <script>
        window.document.onkeydown = function (evt) {
            if ((evt.which == 112)
                || (evt.which == 65 && evt.ctrlKey == true)
                || (evt.which == 66 && evt.ctrlKey == true)
                || (evt.which == 67 && evt.ctrlKey == true)
                || (evt.which == 68 && evt.ctrlKey == true)
                || (evt.which == 69 && evt.ctrlKey == true)
                || (evt.which == 70 && evt.ctrlKey == true)
                || (evt.which == 71 && evt.ctrlKey == true)
                || (evt.which == 72 && evt.ctrlKey == true)
                || (evt.which == 73 && evt.ctrlKey == true)
                || (evt.which == 74 && evt.ctrlKey == true)
                || (evt.which == 75 && evt.ctrlKey == true)
                || (evt.which == 76 && evt.ctrlKey == true)
                || (evt.which == 79 && evt.ctrlKey == true)
                || (evt.which == 80 && evt.ctrlKey == true)
                || (evt.which == 114)
                || (evt.which == 115)
                || (evt.which == 82 && evt.ctrlKey == true)
                || (evt.which == 116)
                || (evt.which == 122)
                || (evt.which == 73 && evt.ctrlKey == true && evt.shiftKey == true)
                || (evt.which == 123)
                || (evt.which == 37 && evt.altKey == true)
                || (evt.which == 39 && evt.altKey == true)
                || (evt.which == 8)
                || (evt.which == 9)
                || (evt.which == 33)
                || (evt.which == 34)
                || (evt.which == 35)
                || (evt.which == 36)
                || (evt.which == 37)
                || (evt.which == 38)
                || (evt.which == 39)
                || (evt.which == 40)
                || (evt.which == 121 && evt.shiftKey == true)
                || (evt.which == 13)
                || (evt.which == 27)
                || (evt.which == 32)
                || (evt.which == 46)
            ) {
                evt.which = null;
                return false;
            }
            document.oncontextmenu = function () { return false; }
        }


        document.addEventListener('keypress', keypress_event);
        document.addEventListener('keyup', keyup_event);

        function keypress_event(e) {
            // if (event.ctrlKey) {
            //     document.getElementById('output').innerHTML += ' CTRL+' + e.key;
            // }
            document.getElementById('output').innerHTML += e.key;
            return false;
        }


        function keyup_event(e) {
            // document.getElementById('output').innerHTML = '';
            return false;
        }
    </script>
</head>
<body>
    <h1>キーボード入力</h1>
    <p id="output"></p>
</body>
</html>
