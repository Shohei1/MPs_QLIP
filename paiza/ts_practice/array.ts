// 配列の宣言
let lines: any[] = new Array(3);

// 配列の初期化
lines[0] = "3 4";
lines[1] = "8 1 3 8";
lines[2] = "1 3 8 1";
lines[3] = "1 1 1 1";
lines[4] = "1 3 8 1";
    // 配列の要素を取り出し

let a: number = lines[0].split(" ");
let n:number = a[0];
let m: number = a[1]

// let x: number = lines[1].split(" ");

for (let i = 1; i <= m; i++){
    console.log(lines[i])
}
console.log(n)
console.log(m)
