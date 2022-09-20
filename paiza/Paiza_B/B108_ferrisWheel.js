
/**
必要な変数
lines[]はPaizaから入力される配列

ゴンドラの数(N)
各ゴンドラの人数制限(A_i)

グループの数(M)
各グループの数 (B_i)

各ゴンドラに乗った人の合計数(C_N)

ゴンドラの現在の位置(N_i)

アプローチ１
とりあえず配列に入れてみるか
各ゴンドラに数を入れるための変数を作ってみる関数を作る
ゴンドラをゴンドラの数回して、人を入れてみるか
**/

// 入力例１
let lines = [
    '3 3', '5', '5', '5', '6', '5', '3', ''
]
// 入力例２
let lines3 = [
    '4 6', '4', '2', '4', '2', '9', '3', '5', '7', '1', '3', ''
]
// 入力例３
let lines2 = [
    '2 1', '10', '10', '3', ''
]

// ゴンドラとグループの数を分けて配列に入れる
let hairetsu = lines[0].split(" ")

// ゴンドラの数
let numberOfGondoraN = Number(hairetsu[0])


// グループの数
let numberOfGroupM = Number(hairetsu[1])

// lines[2], lines[3]...lines[2+N]は各ゴンドラの乗せれる数
// lines[2+N+1]...lines[2+N+M]は各グループの人数

// 各ゴンドラの人数制限
let limitsForGondora = []
// 各グループの人数
let numerOfPeopleInGroup = []

// 入力された配列から各ゴンドラの人数制限を受け取り、配列に入れる
for (let i = 1; i <= numberOfGondoraN; i++) {
    limitsForGondora.push(Number(lines[i]))
}

// 入力された配列から各グループの人数を受け取り、配列に入れる
for (let i = 1; i <= numberOfGroupM; i++) {
    let a = numberOfGondoraN + i
    numerOfPeopleInGroup.push(Number(lines[a]))
}
let gondora = []


// 人数の合計値を出す
let total = numerOfPeopleInGroup.reduce((sum, element) => sum + element, 0)






// function peopleInGondora() {
//     // ゴンドラに乗った人数を足していくための変数
//     let peopleN = 0
//     // 人数の合計値より大きい時に止める
//     while (total > peopleN) {
//         //ゴンドラの数だけ。。ん？ここfor文入らんな
//         // for (let i = 0; i < numberOfGondoraN; i++) {
//         // }
//         // ゴンドラの配列の数
//         let i = 0
//         // グループの配列の数
//         let g = 0

//         if (numerOfPeopleInGroup[g] > limitsForGondora[i]) {
//             // ゴンドラの人数制限とグループの人数の差分//これは関数ないの変数でいけるか？
//             let sabun = numerOfPeopleInGroup[g]
//             while (sabun <= 0) {
//                 sabun -= limitsForGondora[i]
//                 i++
//             }
//             peopleN += limitsForGondora[i]
//             i += 1
//             g += 1

//                 // let sabun = numberOfGondoraN - limitsForGondora[i]
//                 // if (sabun > )
//             } else if (numberOfGondoraN <= limitsForGondora[i]) {

//             }
//             gondora.push(numerOfPeopleInGroup[i])
//             // console.log(gondora)
//             peopleN = numerOfPeopleInGroup[i]
//     }

// }

// １グループの人数がゼロになるまでゴンドラにのせる関数
function useAll() {
    // ゴンドラの配列の数
    let i = 0
     // グループの配列の数
    let g = 0
    // グループ内の人数
    let sabun = numerOfPeopleInGroup[g]

    let peopleN = 0

    while (sabun >= 0) {
        sabun -= limitsForGondora[i]
        i++
        console.log(sabun)
        if (sabun > 0) {
            peopleN += sabun
        }
        console.log(peopleN)
        if (sabun < limitsForGondora[i]) { //limitsForGondora[i] = 5


        }
    }
}

//ゴンドラに人を乗せる
function getInGondora(limits) {

    let number = 0
    // 制限がー人だったら

}

// ゴンドラを生成して、人を入れる関数


console.log(total)
// console.log(numberOfGondoraN)
// console.log(numberOfGroupM)
console.log(limitsForGondora)
console.log(numerOfPeopleInGroup)
// console.log(lines)
// console.log(hairetsu[0])
// peopleInGondora()
useAll()
