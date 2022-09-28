// // 配列の宣言
// let lines: any[] = new Array();

// // 配列の初期化
// lines[0] = "3 4";
// lines[1] = "8 1 3 8";
// lines[2] = "1 3 8 1";
// lines[3] = "1 1 1 1";
// lines[4] = "1 3 8 1";
//     // 配列の要素を取り出し

// // let a: number = lines[0].split(" ");
// // let n:number = a[0];
// // let m: number = a[1]

// // const fs = require("fs");
// // const input = fs.readFileSync("/dev/stdin", "utf-8").trim();
// // const lines = input.split("\n");

// // console.log(lines[3])

// // 配列linesの1番目をスペースで分けて、マップ関数で数字に変えて新しい配列に入れる
// const [m, n] = lines[0].split(" ").map(Number);

// // console.log(m)

// // [lines.slice(1, m + 1)]: 配列aにlines配列の1番目から(配列での2番目)、4番目(1+3(m))のものをとる（この時に4番目は含まれない）。linesの1から3番目
// //[map((line) => line.split(" ").map(Number));]: lines[1]からlines[3]までを対象に、各々の配列をスペースで分けて、数字にして配列aに入れる
// const a = lines.slice(1, m + 1).map((q) => q.split(" ").map(Number));
// // console.log(lines)
// // console.log(a)

// //配列xには配列lines[4](3+1)をスペースで分けて、数字にする
// const x = lines[m + 1].split(" ").map(Number);


// let positionX = 0;
// // 二重ループで三つとひとつを除いていく
// for (let i = 0; i < m; i++) {

//     let equalX = true;

//     for (let j = 0; j < n; j++) {

//         if (a[i][j] !== x[j]) { //i =0, j = 0,1,2,3
//             // 一個でも間違えたら止めてi++して次（i=1）
//             equalX = false;
//             break;
//         }
//     }

//     // equalXがfalseにならなかったら、その時のiに位置を足す（何個目のものと合致したか）
//     if (equalX) {
//         positionX = i + 1;
//         break;
//     }
// }

// console.log(`答えは = ${positionX}`);
