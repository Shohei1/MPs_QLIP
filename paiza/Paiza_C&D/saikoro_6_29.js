let lines = require("fs").readFileSync("/dev/stdin", "utf8").split("\n");

let hairetsu = lines[0].split(" ");

let dice = hairetsu[0]; //n
let goal = hairetsu[1]; //m
let blocks = [];
// 効果が入ってる配列
let effect = [];

// 現在の自分の位置
let yourPosition = 0;

// 効果が入ってる配列
//最後から一個前の数字を入れる変数
let oneBeforeLast = hairetsu[0] - 1;

//入力の２番目からN-2番目までを配列に入れる
for (let i = 1; i < oneBeforeLast; i++) {
    effect += lines[i];
}

// start + effects +goalを入れた配列を作る
blocks.push("start");

let effectLength = effect.length;
for (let i = 0; i < effectLength; i++) {
    blocks.push(effect[i]);
}

blocks.push("end");
// blocks += start; これだと一文字づつ入るようになる

// ＊＊＊＊＊＊＊＊＊サイコロの出目を配列に入れるためのもの＊＊＊＊＊＊＊＊＊//
let saikoro = [];
let nagasa = Number(hairetsu[0]) - 1;
// console.log(nagasa);
let effectNagasa = effect.length;
// console.log(effectNagasa);

for (let i = 0; i < effectLength; i++) {
    let a = nagasa + i;
    // console.log(a);
    saikoro.push(lines[a]);
    // console.log(saikoro);
}

// console.log(saikoro);

function throwDice() {
    let hantei = blocks[yourPosition];
    if (hantei === "+") {
        yourPosition++;
    } else if (hantei === "-") {
        yourPosition--;
    } else if (hantei === "r") {
        yourPosition = 0;
    } else {
    }
    return yourPosition;
}

//M回forでダイスを回す。その中でゴールできたら、ゴールと表示。その後、ゴールできてなかったら、まだと途中と表示。
let final = "";
// console.log(final);
for (let i = 0; i < goal; i++) {
    let diceNumber = saikoro[i];
    // console.log(diceNumber);
    // yourPosition = diceNumber;

    if (yourPosition < oneBeforeLast) {
        yourPosition = +diceNumber;
        throwDice();
        // console.log(yourPosition);
    } else if (yourPosition > oneBeforeLast) {
        final = "goal";
        let throwNumber = i;
        console.log(final);
        console.log(throwNumber);
    } else {
        // console.log("stil");
        // console.log("yourPosition");
    }

    // console.log(diceNumber);
}

if (yourPosition > oneBeforeLast) {
    final = "goal";
    console.log(final);
    console.log(goal);
}
if (final !== "goal") {
    console.log("still");
    console.log(yourPosition);
}

//変数diceに入ってる数字分-2がスタート(+1)の後にセットされる効果マスの数
//変数goalに入ってる数字分が 効果マス+1からlinesに入ってる

// console.log(blocks[0]);

// console.log(dice);
// console.log(saikoro);
