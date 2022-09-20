let lines = require("fs").readFileSync("/dev/stdin", "utf8").split("\n");
//これはjsのサーバーサイドのnodeの話
//入力タブからデータを受け取るための命令
//受け取ったデータが変数linesに代入される

let userName = lines[0];
// 受け取った一行目を角括弧で取り出すことができる

console.log(`Hello ${userName}`);

let number = lines[1];
// これで受け取ったデータから、２行目のデータを変数に代入してる

console.log(number);

function originalAbs(val) {
    return val < 0 ? -val : val;
}

console.log(originalAbs(12));

process.stdin.resume();
process.stdin.setEncoding("utf8");
// 自分の得意な言語で
// Lets チャレンジ！！
let lines = require("fs").readFileSync("/dev/stdin", "utf8").split("\n");

let number = lines[0];

let zettaichi = number < 0 ? -number : number;

console.log(zettaichi);

//zettaichi
let lines = require("fs").readFileSync("/dev/stdin", "utf8").split("\n");

let number = lines[0];

function zettaichi(val) {
    return val < 0 ? -val : val;
}

console.log(zettaichi(number));
