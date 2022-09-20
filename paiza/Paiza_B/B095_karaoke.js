
/**採点は 100 点からの減点方式で 0 点を下回ることはありません。以下を参考にして、課題曲の誤差があるたびにに点数を引いていきます。
ただし、誤差とは、ただしい音程と自分が歌った音程の差の絶対値とします。

・誤差 5 Hz 以内なら減点しない
・上記に当てはまらず、誤差 10 Hz 以内なら 1 点減点
・上記に当てはまらず、誤差 20 Hz 以内なら 2 点減点
・上記に当てはまらず、誤差 30 Hz 以内なら 3 点減点
・上記に当てはまらない場合、5 点減点

課題曲の正しい音程と、N 人の歌った音程が入力されるので、N 人のうちの最高得点を出力してください。

**/

// Nは歌う人の人数
// Mは曲の長さ
// 最初のものは正しい音節
// それ以降は人が歌った音節

// 入力例１
let lines = [
    '2 3', '410', '420', '400', '400', '400', '300', '300', '300', '300'
]
// 入力例２
let lines2 = [
    '2 5', '380', '390', '400', '410', '420', '380', '400', '420','440', '451', '380', '380', '380', '380', '389',''
]

let hairetsu = lines[0].split(" ")

let people = Number(hairetsu[0])
let length = Number(hairetsu[1])

console.log(people)
console.log(length)

let correctSound = []

for (let i = 1; i <= length; i++) {
    correctSound.push(Number(lines[i]))
}


console.log(correctSound)

// 採点する関数
function saiten() {
    let soundLength = Number(correctSound.length)
    let peopleSound = []

    for (let i = 1; i <= soundLength; i++) {
        let a = soundLength + i
        peopleSound.push(lines[a])
    }
    console.log(peopleSound)
}

saiten()


// 人数回歌わせる
for (let i = 0; i < people; i++) {
let correctSound = []

for (let i = 1; i <= length; i++) {
    correctSound.push(Number(lines[i]))
}
}
