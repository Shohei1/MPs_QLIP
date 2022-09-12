var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        if (typeof b !== "function" && b !== null)
            throw new TypeError("Class extends value " + String(b) + " is not a constructor or null");
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
var _a, _b;
function sayHello(firstName) {
    console.log('Hello' + firstName);
}
var firstName = 'Shohei';
sayHello(firstName);
//typescriptでは文字数や数字といった方だけではなく、オブジェクトやクラス、関数などにも型定義情報を付与していくことが可能です。
function calc(isSum) {
    var a = 100;
    if (isSum) {
        var b_1 = a + 1;
        return b_1;
    }
    // return b; bはブロックスコープの外側だからエラーになる
}
var age = 28;
var isDone = false;
var color = 'あお';
var mynumber = 200;
var array = [];
array.push('Shohei');
// array.push(1); 数字はstringじゃないのでエラーになる
var mixedArray = ['foo', 1];
var mixedArrayU = ['foo', 1]; //Union型
var mixedArrayT = ['foo', 1]; //タプル
//string型のnameとnumber型のageの身を持つオブジェクトの形を定義
var user = {
    name: 'Shohei',
    age: 28
};
console.log(user.name);
console.log(user.age);
function sayHello2(name) {
    return "Hello ".concat(name);
}
sayHello2('Shohei');
function sayHello3(name, greeting) {
    //?をつけることで中身がなくてもエラーにはならない（オプショナル）
    return "".concat(greeting, " ").concat(name);
}
sayHello3('Shohei'); //Shohei
sayHello3('Shohei', 'Hello'); //Hello Shohei
function sayHello4(name, greeting) {
    if (greeting === void 0) { greeting = 'Hello'; }
    //?をつけることで中身がなくてもエラーにはならない（オプショナル）
    return "".concat(greeting, " ").concat(name);
}
sayHello3('Shohei'); //Hello Shohei
sayHello3('Shohei', 'hey'); //hey Shohei
function printName(firstName, formatter) {
    console.log(formatter(firstName));
}
function formatName(name) {
    return "".concat(name, " san");
}
printName('Shohei', formatName); // Shohei san
// アロー関数は右のように型を指定できる (引数名：引数の型):戻り値の型 => 戻り値の型
function genBirdsInfo(name) {
    return name.split(',');
}
//関数の型を利用
//（x:string) => string[]
function singBirds(birdInfo) {
    var bird = ['hato,kiji'];
    console.log(bird);
    return birdInfo('hato,kiji')[0] + ' piyo piyo';
}
console.log(singBirds(genBirdsInfo));
function printPoint(point) {
    console.log("x\u5EA7\u6A19\u306F".concat(point.x, "\u3067\u3059"));
    console.log("y\u5EA7\u6A19\u306F".concat(point.y, "\u3067\u3059"));
}
printPoint({ x: 100, y: 100 });
function printPoint2(point) {
    console.log("x\u5EA7\u6A19\u306F".concat(point.x, "\u3067\u3059"));
    console.log("y\u5EA7\u6A19\u306F".concat(point.y, "\u3067\u3059"));
    console.log("z\u5EA7\u6A19\u306F".concat(point.z, "\u3067\u3059"));
}
printPoint2({ x: 100, y: 100, z: 200 });
var cc = {
    color: '赤',
    radius: 10
};
// 型エイリアスはオブジェクトの型そのものを表すもの
// オブジェクトそのものではなく、クラスやオブジェクトの一部のプロパティや関数を含む一部の振る舞いを定義するものであれば、インターフェースを使う
// クラス
var Point4 = /** @class */ (function () {
    // 引数がない場合の初期値を指定する
    function Point4(x, y) {
        if (x === void 0) { x = 0; }
        if (y === void 0) { y = 0; }
        this.x = x;
        this.y = y;
    }
    // 戻り値がない関数を定義するためにvoicを指定する
    Point4.prototype.moveX = function (n) {
        this.x += n;
    };
    Point4.prototype.moveY = function (n) {
        this.y += n;
    };
    return Point4;
}());
var point5 = new Point4();
point5.moveX(10);
console.log("".concat(point5.x, ", ").concat(point5.y)); //10, 0
// extendsを使って継承
var Point3D = /** @class */ (function (_super) {
    __extends(Point3D, _super);
    function Point3D(x, y, z) {
        if (x === void 0) { x = 0; }
        if (y === void 0) { y = 0; }
        if (z === void 0) { z = 0; }
        var _this = 
        // 継承先のコンストラクトを呼び出す
        _super.call(this, x, y) || this;
        _this.z = z;
        return _this;
    }
    Point3D.prototype.moveZ = function (n) {
        this.z += n;
    };
    return Point3D;
}(Point4));
var point3D = new Point3D();
// 継承先のメソッドを呼び出すことができる
point3D.moveX(10);
point3D.moveZ(20);
console.log("".concat(point3D.x, ", ").concat(point3D.y, ", ").concat(point3D.z)); //10, 0, 20
var User = /** @class */ (function () {
    function User() {
        this.name = '';
        this.age = 0;
    }
    // インターフェースに定義されているメソッドを実装しない場合は、コンパイルエラーになる
    User.prototype.sayHello3 = function () {
        return "\u3053\u3093\u306B\u3061\u306F\u3001\u79C1\u306F".concat(this.name, "\u3001").concat(this.age, "\u6B73\u3067\u3059\u3002");
    };
    return User;
}());
var user2 = new User();
user2.name = 'Shohei';
user2.age = 28;
console.log(user2.sayHello3());
// アクセス修飾子
// typescriptのアクセス修飾子(Access Modifiers)はpublic, private, protected (phpと一緒かな？)
// class BasePoint3D {
//     public x: number;
//     private y: number;
//     protected z: number;
// }
// // インスタンス化をおこなった場合のアクセス制御の例
// const basePoint = new BasePoint3D();
// basePoint.x; //ok
// // basePoint.y; //privateなのでエラー
// // basePoint.z; //protectedもエラー
// // クラスを継承した際のアクセス制御
// class ChildPoint extends BasePoint3D {
//     constructor() {
//         super();
//         this.x; //ok
//         // this.y; //privateなのでエラー
//         this.z; //ok
//     }
// }
// 実際の開発で重要な型
// Enum型、ジェネリック型、Union型とIntersection型、リテラル型、never型
// Enum型・列挙型
var Direction;
(function (Direction) {
    Direction[Direction["Up"] = 0] = "Up";
    Direction[Direction["Down"] = 1] = "Down";
    Direction[Direction["Left"] = 2] = "Left";
    Direction[Direction["Right"] = 3] = "Right";
    //数字の指定がなかったら、インクリメントで自動で設定される
})(Direction || (Direction = {}));
// enum direcionを参照
var direction = Direction.Left;
console.log(direction);
(function (Direction) {
    Direction["Up2"] = "UP";
    Direction["Down2"] = "DOWN";
    Direction["Left2"] = "LEFT";
    Direction["Right2"] = "RIGHT";
})(Direction || (Direction = {}));
var value = 'DOWN';
var enumValue = value;
if (enumValue === Direction.Down2) {
    console.log('Down is selected');
}
//ジェネリック型
// 外側から指定される型が異なっても動作するような凡庸的なクラスや関数を実装する際に便利
//Tはクラス内で利用する仮の型の名前です
var Queue = /** @class */ (function () {
    function Queue() {
        // 内部にTの型の配列を初期化します
        this.array = [];
    }
    // Tの型の値を配列に追加します
    Queue.prototype.push = function (item) {
        this.array.push(item);
    };
    // Tの型の配列最初の値を取り出します
    Queue.prototype.pop = function () {
        return this.array.shift();
    };
    return Queue;
}());
var queue = new Queue(); //数値型を扱うキュー生成します
queue.push(111);
queue.push(112);
// queue.push("hoge"); number型ではないのでエラー
var str = 'fuga';
// str = queue.pop(); strはnumber型ではないのでエラー
//Union型とIntersection型
// Union型
//どちらかに該当していればエラーにならない
function printId(id) {
    console.log(id);
}
printId(11);
printId('Shohei');
function printId2(id) {
    console.log(id);
}
printId2('false');
var id = {
    id: '111',
    name: 'Shohei'
};
var contact = {
    name: 'SHOHEI',
    email: 'test@example.com',
    phone: '01234567'
};
console.log(id);
console.log(contact);
var employee = {
    id: '111',
    name: 'Shohei',
    email: 'test@example.com',
    phone: '0122345678'
};
console.log(employee);
// 下記はContact情報のみで変数定義ができないのでエラー。idが必要
// const employeeContact: Employee = {
//     name: "Shohei",
//     email: "test@example.com",
//     phone: "0122345678",
// };
//リテラル型
// | でデータを区切るリテラル型を用いると、決まった文字列や数字しか入らない型という制御が可能
var postStatus;
postStatus = 'draft';
// 下記は型宣言にないからエラーになる
// postStatus = "drafts";
// リテラル型は数字としても使える
// 下記は関数の戻り値を型情報として定義する際に数値リテラル型を使用する例
//-1,0,1のいずれかしか返さない型情報を定義
function compare(a, b) {
    // 三項演算子でif, else if, elseを使ってる
    return a === b ? 0 : a > b ? 1 : -1;
}
// never型
// 決して発生しない値の種類を表す
// 例えば、常に例外を発生させる関数などで決して値が返されることのない戻り値の方をneverとして定義する
//エラーが常に返るような関数で決して値が正常に帰らない場合にnever型を指定する
function error(message) {
    throw new Error(message);
}
function foo(x) {
    if (typeof x === 'string') {
        return true;
    }
    else if (typeof x === 'number') {
        return false;
    }
    //neverを利用することで明示的に値が返らないことをコンパイラに伝えることができる
    //neverを使用しないとTypeScriptはコンパイルエラーになる
    return error('Never happens');
}
// neverの使い方２
// if文やswitch文でTypescriptの型の条件分岐に漏れがないことを保証するようなケースもある
//将来的にも定数が追加される可能性のあるenum型を定義する
var PageType;
(function (PageType) {
    PageType[PageType["ViewProfile"] = 0] = "ViewProfile";
    PageType[PageType["EfitProfile"] = 1] = "EfitProfile";
    PageType[PageType["ChangePassword"] = 2] = "ChangePassword";
})(PageType || (PageType = {}));
var getTitleText = function (type) {
    switch (type) {
        case PageType.ViewProfile:
            return 'Setting';
        case PageType.EfitProfile:
            return 'Edit Profile';
        case PageType.ChangePassword:
            return 'Change Password';
        default:
            // 決して起きないことをコンパイラに伝えるnever型に代入を行う
            // これにより、仮に将来PageTypeのenum型に定数が新規で追加された際に
            // コンパイラ時にエラーが起きるためのバグを未然に防ぐ対応を行いことができる
            var wrongType = type;
            throw new Error("$(wrongType) is not in PageType");
    }
};
var user4;
user4 = { name: 'Shohei', social: { facebook: true, twitter: true } };
console.log((_a = user4.social) === null || _a === void 0 ? void 0 : _a.facebook); //trueが出力
user4 = { name: 'Shohei' };
console.log((_b = user4.social) === null || _b === void 0 ? void 0 : _b.facebook); //undefined
console.log(user4.name);
// Non-null Assertion Operator
// Nullの場合コンパイラエラーになるのを'!'で明示的に指名して、コンパイルエラーを抑制する
function processUser(user) {
    var s = user.name;
    //Optional Chainingはトランスパイルされて生成されるJavaScriptにNullチェックのコードを追加するため、実行時にエラーにならない
}
// 型ガード
function addOne(value) {
    if (typeof value === 'string') {
        return Number(value) + 1; //Number()は文字列を数字にする
    }
    return value + 1;
}
console.log(addOne(10));
console.log(addOne('20'));
var response = {};
var user5 = response; //ここは少し復習か実習が必要
if (user5.info) {
    console.log(user5.info.name);
}
var key1 = 'name';
// const key2: UserKey = "phone"; //エラーになる
function getProperty(obj, key) {
    //extends keyof で K をTのキーであるstringとかnumberを返してるのかな？？
    //<T~>の「ジェネリック型」で外から入るようになってる
    //第一引数に渡したオブジェクトの型のプロパティ名のUnion型と、第二引数で渡す値の型が一致しない場合、型エラーになる
    //T[K]によりキーに対応する方が戻り値の型になる。例えば、上記のUser6のageをkeyに渡した場合、戻り値の方はnumberになる
    return obj[key];
}
var user6 = {
    name: 'Shohei6',
    age: 36,
    email: 'test6@example.com'
};
var userName6 = getProperty(user6, 'name');
var versions = {
    102: false,
    103: false,
    104: true
    // 'v105': true //エラーになる
};
var user8 = { name: 'Shohei', gender: 'Male' };
var user9 = {
    name: 'Shohei',
    gender: 'Male'
};
var userReadonly = {
    name: 'Shohei',
    gender: 'Male'
};
user9.name = 'Yoshida';
// userReadonly.name = "Yoshida"; エラーになる
// unknown
// anyよりも安全なコードが書けるようになる
var x = 123;
var y = 'Hello';
// 下記は二つともエラーになる
// console.log(x.toFixed(1));
// console.log(y.toLowerCase());
if (typeof x === 'number') {
    console.log(x.toFixed(1));
}
if (typeof y === 'string') {
    console.log(y.toLowerCase());
}
// ちょっと動かなかったのでパス
// // 非同期のAsync/Await
// // 非同期処理APIのPromiseの簡易版にあたるものがAsync/Awaitの機能
// function fetchFromServer(id: string): Promise<{ success: boolean }> {
//     return new Promise((resolve) => {
//         setTimeout(() => {
//             resolve({ success: true });
//         }, 100);
//     });
// }
// // 非同期処理を含むasync functionの戻り値の型はPromiseとなります
// async function asyncFunc(): Promise<string> {
//     //Promiseな値はawaitすると中身が取り出せる（ように見える）
//     const result = await fetchFromServer("111");
//     return `The result: ${result.success}`;
// }
// //await構文を使うためにはasync functionの中で呼び出す必要があります
// (async () => {
//     const result = await asyncFunc();
//     console.log(result);
// })();
// //Promiseとして扱う際は以下のように記述します
// asyncFunc().then((result) => console.log(result));
// p64の型定義ファイルは要復習・実装
//typescriptの基礎修了
var lines1 = [1, 201];
var a = Number(lines1[0]);
var b = Number(lines1[1]);
if (a > b) {
    console.log(a);
}
else {
    console.log(b);
}
