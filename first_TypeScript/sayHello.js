function sayHello(firstName) {
    console.log("Hello" + firstName);
}
var firstName = "Shohei";
sayHello(firstName);
//typescriptでは文字数や数字といった方だけではなく、オブジェクトやクラス、関数などにも型定義情報を付与していくことが可能です。
function calc(isSum) {
    var a = 100;
    if (isSum) {
        var b = a + 1;
        return b;
    }
    // return b; bはブロックスコープの外側だからエラーになる
}
var age = 28;
var isDone = false;
var color = "あお";
var mynumber = 200;
var array = [];
array.push("Shohei");
// array.push(1); 数字はstringじゃないのでエラーになる
var mixedArray = ["foo", 1];
var mixedArrayU = ["foo", 1]; //Union型
var mixedArrayT = ["foo", 1]; //タプル
//string型のnameとnumber型のageの身を持つオブジェクトの形を定義
var user = {
    name: "Shohei",
    age: 28
};
console.log(user.name);
console.log(user.age);
function sayHello2(name) {
    return "Hello ".concat(name);
}
sayHello2("Shohei");
function sayHello3(name, greeting) {
    //?をつけることで中身がなくてもエラーにはならない（オプショナル）
    return "".concat(greeting, " ").concat(name);
}
sayHello3("Shohei"); //Shohei
sayHello3("Shohei", "Hello"); //Hello Shohei
function sayHello4(name, greeting) {
    if (greeting === void 0) { greeting = "Hello"; }
    //?をつけることで中身がなくてもエラーにはならない（オプショナル）
    return "".concat(greeting, " ").concat(name);
}
sayHello3("Shohei"); //Hello Shohei
sayHello3("Shohei", "hey"); //hey Shohei
function printName(firstName, formatter) {
    console.log(formatter(firstName));
}
function formatName(name) {
    return "".concat(name, " san");
}
printName("Shohei", formatName); // Shohei san
// アロー関数は右のように型を指定できる (引数名：引数の型):戻り値の型 => 戻り値の型
function genBirdsInfo(name) {
    return name.split(",");
}
//関数の型を利用
//（x:string) => string[]
function singBirds(birdInfo) {
    var bird = ["hato,kiji"];
    console.log(bird);
    return birdInfo("hato,kiji")[1] + " piyo piyo";
}
console.log(singBirds(genBirdsInfo));
// console.log(singBirds("dobato"));
