// // 配列の宣言
let lines = new Array();

// // 配列の初期化
lines[0] = "3 3 4";
lines[1] = "-8 7 6";
lines[2] = "-5 0 -1";
lines[3] = "3 6 -9";
lines[4] = "6 -10 -1";
lines[5] = "9 -4 -10";
lines[6] = "1 3 -4";
lines[7] = "4 9 -13";

// const fs = require("fs");
// const input = fs.readFileSync("/dev/stdin", "utf-8").trim();
// const lines = input.split("\n");

const [n, , l] = lines[0].split(" ").map(Number);
const dTable = lines.slice(1, n + 1).map((line) => line.split(" ").map(Number));
const params = lines.slice(n + 1).map((line) => line.split(" ").map(Number));

for (let i = 1; i < l; i++) {
    const parameterDiff = params[i].map((param, j) => param - params[i - 1][j]);
    const commandNumber = dTable.findIndex((dRow) =>
    dRow.every((dCell, j) => dCell === parameterDiff[j])
    );
    console.log(1 + commandNumber);
}



let result = [75, 68, 92, 84, 90];

let passIndex = result.findIndex(function(element){
  return element < 70;
});

let passValue = result.find(element => element > 85 && element < 92);


console.log(passIndex);
console.log(passValue);
