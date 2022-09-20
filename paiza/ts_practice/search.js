// let lines = require("fs").readFileSync("/dev/stdin", "utf8").split("\n");
// 配列の宣言
var lines = new Array(3);
// 配列の初期化
lines[0] = "5";
lines[1] = "4 1 3 5 2";
lines[2] = "5";
// 配列の要素を取り出し
var a = lines[0].split(" ");
var b = lines[1].split(" ");
var c = lines[2].split(" ");
console.log(b);
