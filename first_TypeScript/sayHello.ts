function sayHello(firstName: string) {
    console.log("Hello" + firstName);
}

let firstName: string = "Shohei";
sayHello(firstName);

//typescriptでは文字数や数字といった方だけではなく、オブジェクトやクラス、関数などにも型定義情報を付与していくことが可能です。

function calc(isSum: boolean) {
    let a = 100;
    if (isSum) {
        let b = a + 1;
        return b;
    }

    // return b; bはブロックスコープの外側だからエラーになる
}

let age: number = 28;
let isDone: boolean = false;
let color: string = "あお";

let mynumber: number = 200;

const array: string[] = [];
array.push("Shohei");
// array.push(1); 数字はstringじゃないのでエラーになる

const mixedArray = ["foo", 1];
const mixedArrayU: (string | number)[] = ["foo", 1]; //Union型
const mixedArrayT: [string, number] = ["foo", 1]; //タプル

//string型のnameとnumber型のageの身を持つオブジェクトの形を定義
let user: { name: string; age: number } = {
    name: "Shohei",
    age: 28,
};

console.log(user.name);
console.log(user.age);

function sayHello2(name: string): string {
    return `Hello ${name}`;
}

sayHello2("Shohei");

function sayHello3(name: string, greeting?: string): string {
    //?をつけることで中身がなくてもエラーにはならない（オプショナル）
    return `${greeting} ${name}`;
}

sayHello3("Shohei"); //Shohei
sayHello3("Shohei", "Hello"); //Hello Shohei

function sayHello4(name: string, greeting: string = "Hello"): string {
    //?をつけることで中身がなくてもエラーにはならない（オプショナル）
    return `${greeting} ${name}`;
}

sayHello3("Shohei"); //Hello Shohei
sayHello3("Shohei", "hey"); //hey Shohei

function printName(firstName: string, formatter: (name: string) => string) {
    console.log(formatter(firstName));
}

function formatName(name: string): string {
    return `${name} san`;
}

printName("Shohei", formatName); // Shohei san

// アロー関数は右のように型を指定できる (引数名：引数の型):戻り値の型 => 戻り値の型

function genBirdsInfo(name: string): string[] {
    return name.split(",");
}

//関数の型を利用
//（x:string) => string[]
function singBirds(birdInfo: (x: string) => string[]): string {
    let bird: string[] = ["hato,kiji"];
    console.log(bird);
    return birdInfo("hato,kiji")[0] + " piyo piyo";
}
console.log(singBirds(genBirdsInfo));
// console.log(singBirds("dobato"));

//型エイリアス
type Point = {
    x: number;
    y: number;
};

function printPoint(point: Point) {
    console.log(`x座標は${point.x}です`);
    console.log(`y座標は${point.y}です`);
}

printPoint({ x: 100, y: 100 });

//インターフェース
interface Point2 {
    x: number;
    y: number;
}

function printPoint2(point: Point2) {
    console.log(`x座標は${point.x}です`);
    console.log(`y座標は${point.y}です`);
    console.log(`z座標は${point.z}です`);
}

//zを追加するといった拡張が可能
interface Point2 {
    z: number;
}

printPoint2({ x: 100, y: 100, z: 200 });

// implementsを利用
