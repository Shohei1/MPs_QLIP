// // function sayHello(firstName: string) {
// //   console.log('Hello' + firstName)
// // }

// // let firstName: string = 'Shohei'
// // sayHello(firstName)

// // //typescriptでは文字数や数字といった方だけではなく、オブジェクトやクラス、関数などにも型定義情報を付与していくことが可能です。

// // function calc(isSum: boolean) {
// //   let a = 100
// //   if (isSum) {
// //     let b = a + 1
// //     return b
// //   }

// //   // return b; bはブロックスコープの外側だからエラーになる
// // }

// // let age: number = 28
// // let isDone: boolean = false
// // let color: string = 'あお'

// // let mynumber: number = 200

// // const array: string[] = []
// // array.push('Shohei')



// // let lines = require("fs").readFileSync("/dev/stdin", "utf8").split("\n");
//     // 配列の宣言
//     let lines: any[] = new Array(3);

//     // 配列の初期化
//     lines[0] = "5";
//     lines[1] = "4 1 3 5 2";
//     lines[2] = "12 2 6 5 -9";
//     // 配列の要素を取り出し


// let a:number = lines[0].split(" ");
// let b:number = lines[1].split(" ");
// let c:number = lines[2].split(" ");

// let answer:number[] = []

// for (let i = 0; i < a; i++) {

//     answer.push(c[i]-b[i])

// }

//     let string2 = answer.join(' ');
//     console.log(string2)
