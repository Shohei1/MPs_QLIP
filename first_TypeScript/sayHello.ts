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
//型エイリアスは、型の指定の別名（エイリアス）を設ける機能
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
interface Point3 {
    x: number;
    y: number;
    z?: number;
}

//implementsを使用してクラスに実装を与えること（委譲）が可能
// オプショナルにすることでエラーにはならない
class MyPoint implements Point3 {
    x: number;
    y: number;
}

// 複数のインターフェースを継承して新たなインターフェースを定義できる
interface Colorful {
    color: string;
}

interface Circle {
    radius: number;
}

interface ColorfulCircle extends Colorful, Circle {}

const cc: ColorfulCircle = {
    color: "赤",
    radius: 10,
};
// 型エイリアスはオブジェクトの型そのものを表すもの
// オブジェクトそのものではなく、クラスやオブジェクトの一部のプロパティや関数を含む一部の振る舞いを定義するものであれば、インターフェースを使う

// クラス
class Point4 {
    x: number;
    y: number;

    // 引数がない場合の初期値を指定する
    constructor(x: number = 0, y: number = 0) {
        this.x = x;
        this.y = y;
    }

    // 戻り値がない関数を定義するためにvoicを指定する
    moveX(n: number): void {
        this.x += n;
    }
    moveY(n: number): void {
        this.y += n;
    }
}

const point5 = new Point4();
point5.moveX(10);
console.log(`${point5.x}, ${point5.y}`); //10, 0

// extendsを使って継承

class Point3D extends Point4 {
    z: number;

    constructor(x: number = 0, y: number = 0, z: number = 0) {
        // 継承先のコンストラクトを呼び出す
        super(x, y);
        this.z = z;
    }

    moveZ(n: number): void {
        this.z += n;
    }
}

const point3D = new Point3D();

// 継承先のメソッドを呼び出すことができる
point3D.moveX(10);
point3D.moveZ(20);
console.log(`${point3D.x}, ${point3D.y}, ${point3D.z}`); //10, 0, 20

// インターフェースに対してimplementsを利用することで、クラスに対する実装の強制が可能
//頭のIはインターフェースであることを示すためのもの
interface IUser {
    name: string;
    age: number;
    sayHello3: () => string; //引数なしで文字列を返す
}

class User implements IUser {
    name: string;
    age: number;

    constructor() {
        this.name = "";
        this.age = 0;
    }

    // インターフェースに定義されているメソッドを実装しない場合は、コンパイルエラーになる
    sayHello3(): string {
        return `こんにちは、私は${this.name}、${this.age}歳です。`;
    }
}

const user2 = new User();
user2.name = "Shohei";
user2.age = 28;
console.log(user2.sayHello3());

// アクセス修飾子
// typescriptのアクセス修飾子(Access Modifiers)はpublic, private, protected (phpと一緒かな？)
class BasePoint3D {
    public x: number;
    private y: number;
    protected z: number;
}

// インスタンス化をおこなった場合のアクセス制御の例
const basePoint = new BasePoint3D();
basePoint.x; //ok
// basePoint.y; //privateなのでエラー
// basePoint.z; //protectedもエラー

// クラスを継承した際のアクセス制御
class ChildPoint extends BasePoint3D {
    constructor() {
        super();
        this.x; //ok
        // this.y; //privateなのでエラー
        this.z; //ok
    }
}

// 実際の開発で重要な型
// Enum型、ジェネリック型、Union型とIntersection型、リテラル型、never型
