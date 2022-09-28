// function sayHello(firstName: string) {
//   console.log('Hello' + firstName)
// }


// let firstName: string = 'Shohei'
// sayHello(firstName)

// //typescriptでは文字数や数字といった方だけではなく、オブジェクトやクラス、関数などにも型定義情報を付与していくことが可能です。

// function calc(isSum: boolean) {
//   let a = 100
//   if (isSum) {
//     let b = a + 1
//     return b
//   }

//   // return b; bはブロックスコープの外側だからエラーになる
// }

// let age: number = 28
// let isDone: boolean = false
// let color: string = 'あお'

// let mynumber: number = 200

// const array: string[] = []
// array.push('Shohei')
// // array.push(1); 数字はstringじゃないのでエラーになる

// const mixedArray = ['foo', 1]
// const mixedArrayU: (string | number)[] = ['foo', 1] //Union型
// const mixedArrayT: [string, number] = ['foo', 1] //タプル

// //string型のnameとnumber型のageの身を持つオブジェクトの形を定義
// let user: { name: string; age: number } = {
//   name: 'Shohei',
//   age: 28
// }

// console.log(user.name)
// console.log(user.age)

// function sayHello2(name: string): string {
//   return `Hello ${name}`
// }

// sayHello2('Shohei')

// function sayHello3(name: string, greeting?: string): string {
//   //?をつけることで中身がなくてもエラーにはならない（オプショナル）
//   return `${greeting} ${name}`
// }

// sayHello3('Shohei') //Shohei
// sayHello3('Shohei', 'Hello') //Hello Shohei

// function sayHello4(name: string, greeting: string = 'Hello'): string {
//   //?をつけることで中身がなくてもエラーにはならない（オプショナル）
//   return `${greeting} ${name}`
// }

// sayHello3('Shohei') //Hello Shohei
// sayHello3('Shohei', 'hey') //hey Shohei

// function printName(firstName: string, formatter: (name: string) => string) {
//   console.log(formatter(firstName))
// }

// function formatName(name: string): string {
//   return `${name} san`
// }

// printName('Shohei', formatName) // Shohei san

// // アロー関数は右のように型を指定できる (引数名：引数の型):戻り値の型 => 戻り値の型

// function genBirdsInfo(name: string): string[] {
//   return name.split(',')
// }

// //関数の型を利用
// //（x:string) => string[]
// function singBirds(birdInfo: (x: string) => string[]): string {
//   let bird: string[] = ['hato,kiji']
//   console.log(bird)
//   return birdInfo('hato,kiji')[0] + ' piyo piyo'
// }
// console.log(singBirds(genBirdsInfo))
// // console.log(singBirds("dobato"));

// //型エイリアス
// //型エイリアスは、型の指定の別名（エイリアス）を設ける機能
// type Point = {
//   x: number
//   y: number
// }

// function printPoint(point: Point) {
//   console.log(`x座標は${point.x}です`)
//   console.log(`y座標は${point.y}です`)
// }

// printPoint({ x: 100, y: 100 })

// //インターフェース
// interface Point2 {
//   x: number
//   y: number
// }

// function printPoint2(point: Point2) {
//   console.log(`x座標は${point.x}です`)
//   console.log(`y座標は${point.y}です`)
//   console.log(`z座標は${point.z}です`)
// }

// //zを追加するといった拡張が可能
// interface Point2 {
//   z: number
// }

// printPoint2({ x: 100, y: 100, z: 200 })

// // implementsを利用
// interface Point3 {
//   x: number
//   y: number
//   z?: number
// }

// //implementsを使用してクラスに実装を与えること（委譲）が可能
// // オプショナルにすることでエラーにはならない
// // class MyPoint implements Point3 {
// //     x: number;
// //     y: number;
// // }

// // 複数のインターフェースを継承して新たなインターフェースを定義できる
// interface Colorful {
//   color: string
// }

// interface Circle {
//   radius: number
// }

// interface ColorfulCircle extends Colorful, Circle {}

// const cc: ColorfulCircle = {
//   color: '赤',
//   radius: 10
// }
// // 型エイリアスはオブジェクトの型そのものを表すもの
// // オブジェクトそのものではなく、クラスやオブジェクトの一部のプロパティや関数を含む一部の振る舞いを定義するものであれば、インターフェースを使う

// // クラス
// class Point4 {
//   x: number
//   y: number

//   // 引数がない場合の初期値を指定する
//   constructor(x: number = 0, y: number = 0) {
//     this.x = x
//     this.y = y
//   }

//   // 戻り値がない関数を定義するためにvoicを指定する
//   moveX(n: number): void {
//     this.x += n
//   }
//   moveY(n: number): void {
//     this.y += n
//   }
// }

// const point5 = new Point4()
// point5.moveX(10)
// console.log(`${point5.x}, ${point5.y}`) //10, 0

// // extendsを使って継承

// class Point3D extends Point4 {
//   z: number

//   constructor(x: number = 0, y: number = 0, z: number = 0) {
//     // 継承先のコンストラクトを呼び出す
//     super(x, y)
//     this.z = z
//   }

//   moveZ(n: number): void {
//     this.z += n
//   }
// }

// const point3D = new Point3D()

// // 継承先のメソッドを呼び出すことができる
// point3D.moveX(10)
// point3D.moveZ(20)
// console.log(`${point3D.x}, ${point3D.y}, ${point3D.z}`) //10, 0, 20

// // インターフェースに対してimplementsを利用することで、クラスに対する実装の強制が可能
// //頭のIはインターフェースであることを示すためのもの
// interface IUser {
//   name: string
//   age: number
//   sayHello3: () => string //引数なしで文字列を返す
// }

// class User implements IUser {
//   name: string
//   age: number

//   constructor() {
//     this.name = ''
//     this.age = 0
//   }

//   // インターフェースに定義されているメソッドを実装しない場合は、コンパイルエラーになる
//   sayHello3(): string {
//     return `こんにちは、私は${this.name}、${this.age}歳です。`
//   }
// }

// const user2 = new User()
// user2.name = 'Shohei'
// user2.age = 28
// console.log(user2.sayHello3())

// // アクセス修飾子
// // typescriptのアクセス修飾子(Access Modifiers)はpublic, private, protected (phpと一緒かな？)
// // class BasePoint3D {
// //     public x: number;
// //     private y: number;
// //     protected z: number;
// // }

// // // インスタンス化をおこなった場合のアクセス制御の例
// // const basePoint = new BasePoint3D();
// // basePoint.x; //ok
// // // basePoint.y; //privateなのでエラー
// // // basePoint.z; //protectedもエラー

// // // クラスを継承した際のアクセス制御
// // class ChildPoint extends BasePoint3D {
// //     constructor() {
// //         super();
// //         this.x; //ok
// //         // this.y; //privateなのでエラー
// //         this.z; //ok
// //     }
// // }

// // 実際の開発で重要な型
// // Enum型、ジェネリック型、Union型とIntersection型、リテラル型、never型

// // Enum型・列挙型

// enum Direction {
//   Up,
//   Down,
//   Left,
//   Right
//   //数字の指定がなかったら、インクリメントで自動で設定される
// }

// // enum direcionを参照
// let direction: Direction = Direction.Left
// console.log(direction)

// enum Direction {
//   Up2 = 'UP',
//   Down2 = 'DOWN',
//   Left2 = 'LEFT',
//   Right2 = 'RIGHT'
// }

// const value = 'DOWN'
// const enumValue = value as Direction

// if (enumValue === Direction.Down2) {
//   console.log('Down is selected')
// }

// //ジェネリック型
// // 外側から指定される型が異なっても動作するような凡庸的なクラスや関数を実装する際に便利

// //Tはクラス内で利用する仮の型の名前です
// class Queue<T> {
//   // 内部にTの型の配列を初期化します
//   private array: T[] = []

//   // Tの型の値を配列に追加します
//   push(item: T) {
//     this.array.push(item)
//   }

//   // Tの型の配列最初の値を取り出します
//   pop(): T | undefined {
//     return this.array.shift()
//   }
// }

// const queue = new Queue<number>() //数値型を扱うキュー生成します
// queue.push(111)
// queue.push(112)
// // queue.push("hoge"); number型ではないのでエラー
// let str = 'fuga'
// // str = queue.pop(); strはnumber型ではないのでエラー

// //Union型とIntersection型

// // Union型
// //どちらかに該当していればエラーにならない
// function printId(id: number | string) {
//   console.log(id)
// }

// printId(11)
// printId('Shohei')

// // 型エイリアスとしても定義できる
// type Id = number | string

// function printId2(id: Id) {
//   console.log(id)
// }
// printId2('false')

// // 型エイリアス同士を掛け合わせて新たな型を定義できる
// type Identity = {
//   id: number | string
//   name: string
// }

// type Contact = {
//   name: string
//   email: string
//   phone: string
// }

// //和集合による新たなUnion型の定義をする
// //IdentiryもしくはCOntactの型を受けることが可能
// type IdentityOrContact = Identity | Contact

// const id: IdentityOrContact = {
//   id: '111',
//   name: 'Shohei'
// }

// const contact: IdentityOrContact = {
//   name: 'SHOHEI',
//   email: 'test@example.com',
//   phone: '01234567'
// }

// console.log(id)
// console.log(contact)

// //Intersection型
// // Intersection型は複数の方をマージして一つとなった型。全ての型定義の内容を合わせた方を生成する

// // 積集合による新たなIntersection型の定義をする
// // IdentityとContactの両方の全てのプロパティがマージされた型として扱う
// type Employee = Identity & Contact

// const employee: Employee = {
//   id: '111',
//   name: 'Shohei',
//   email: 'test@example.com',
//   phone: '0122345678'
// }

// console.log(employee)

// // 下記はContact情報のみで変数定義ができないのでエラー。idが必要
// // const employeeContact: Employee = {
// //     name: "Shohei",
// //     email: "test@example.com",
// //     phone: "0122345678",
// // };

// //リテラル型
// // | でデータを区切るリテラル型を用いると、決まった文字列や数字しか入らない型という制御が可能
// let postStatus: 'draft' | 'published' | 'deleted'
// postStatus = 'draft'
// // 下記は型宣言にないからエラーになる
// // postStatus = "drafts";

// // リテラル型は数字としても使える
// // 下記は関数の戻り値を型情報として定義する際に数値リテラル型を使用する例
// //-1,0,1のいずれかしか返さない型情報を定義
// function compare(a: string, b: string): -1 | 0 | 1 {
//   // 三項演算子でif, else if, elseを使ってる
//   return a === b ? 0 : a > b ? 1 : -1
// }

// // never型
// // 決して発生しない値の種類を表す
// // 例えば、常に例外を発生させる関数などで決して値が返されることのない戻り値の方をneverとして定義する

// //エラーが常に返るような関数で決して値が正常に帰らない場合にnever型を指定する
// function error(message: string): never {
//   throw new Error(message)
// }

// function foo(x: string | number | number[]): boolean {
//   if (typeof x === 'string') {
//     return true
//   } else if (typeof x === 'number') {
//     return false
//   }

//   //neverを利用することで明示的に値が返らないことをコンパイラに伝えることができる
//   //neverを使用しないとTypeScriptはコンパイルエラーになる
//   return error('Never happens')
// }

// // neverの使い方２
// // if文やswitch文でTypescriptの型の条件分岐に漏れがないことを保証するようなケースもある

// //将来的にも定数が追加される可能性のあるenum型を定義する
// enum PageType {
//   ViewProfile,
//   EfitProfile,
//   ChangePassword
// }

// const getTitleText = (type: PageType) => {
//   switch (type) {
//     case PageType.ViewProfile:
//       return 'Setting'
//     case PageType.EfitProfile:
//       return 'Edit Profile'
//     case PageType.ChangePassword:
//       return 'Change Password'
//     default:
//       // 決して起きないことをコンパイラに伝えるnever型に代入を行う
//       // これにより、仮に将来PageTypeのenum型に定数が新規で追加された際に
//       // コンパイラ時にエラーが起きるためのバグを未然に防ぐ対応を行いことができる
//       const wrongType: never = type
//       throw new Error(`$(wrongType) is not in PageType`)
//   }
// }

// // TypeScriptのテクニック
// // Optional Chaining

// // Optional Chainingはネストされたオブジェクトのプロパティが存在するかの条件分岐を簡単に記述できる機能
// // nullになり得るsocialというプロパティの方を定義する
// interface User4 {
//   name: string
//   social?: {
//     facebook: boolean
//     twitter: boolean
//   }
// }

// let user4: User4
// user4 = { name: 'Shohei', social: { facebook: true, twitter: true } }
// console.log(user4.social?.facebook) //trueが出力

// user4 = { name: 'Shohei' }
// console.log(user4.social?.facebook) //undefined
// console.log(user4.name)

// // Non-null Assertion Operator
// // Nullの場合コンパイラエラーになるのを'!'で明示的に指名して、コンパイルエラーを抑制する
// function processUser(user?: User) {
//   let s = user!.name
//   //Optional Chainingはトランスパイルされて生成されるJavaScriptにNullチェックのコードを追加するため、実行時にエラーにならない
// }

// // 型ガード
// function addOne(value: number | string) {
//   if (typeof value === 'string') {
//     return Number(value) + 1 //Number()は文字列を数字にする
//   }
//   return value + 1
// }

// console.log(addOne(10))
// console.log(addOne('20'))

// type User5 = {
//   info?: {
//     name: string
//     age: number
//   }
// }

// let response = {}
// const user5 = response as any as User5 //ここは少し復習か実習が必要

// if (user5.info) {
//   console.log(user5.info.name)
// }

// // keyofオペレーター //ここは少し復習か実習が必要
// // keyofオペレーターを用いることでその方が持つ各プロパティのかたのUnion型を返せる
// interface User6 {
//   name: string
//   age: number
//   email: string
// }

// type UserKey = keyof User6 // 'name' | 'age' | 'emailというUnion型になる

// const key1: UserKey = 'name'
// // const key2: UserKey = "phone"; //エラーになる

// function getProperty<T, K extends keyof T>(obj: T, key: K): T[K] {
//   //extends keyof で K をTのキーであるstringとかnumberを返してるのかな？？
//   //<T~>の「ジェネリック型」で外から入るようになってる
//   //第一引数に渡したオブジェクトの型のプロパティ名のUnion型と、第二引数で渡す値の型が一致しない場合、型エラーになる
//   //T[K]によりキーに対応する方が戻り値の型になる。例えば、上記のUser6のageをkeyに渡した場合、戻り値の方はnumberになる

//   return obj[key]
// }
// const user6: User6 = {
//   name: 'Shohei6',
//   age: 36,
//   email: 'test6@example.com'
// }

// const userName6 = getProperty(user6, 'name')

// // const userName7 = getProperty(user6, "gender"); //genderはないのでエラー

// //インデックス型 (index signature) どういった時に使うのかな？？
// //オブジェクトのプロパティが可変の時、まとめて方を定義できる

// type SupportVersions = {
//   [env: number]: boolean
// }

// let versions: SupportVersions = {
//   102: false,
//   103: false,
//   104: true
//   // 'v105': true //エラーになる
// }

// // readonly
// // TypeScriptではエイリアス、インターフェース、クラスにおいてreadyonlyプロパティを指定できる
// // readyonlyを指定されてプロパティは変更不可になる

// type User8 = {
//   readonly name: string
//   readonly gender: string
// }

// let user8: User8 = { name: 'Shohei', gender: 'Male' }

// // user.gender = "Female"; //エラーになる
// // constみたいに再代入できない機能とは違い、用途が異なる
// // constは変数の代入に対して行う宣言、readyonlyはオブジェクトやクラスのプロパティに対して行い宣言

// //readyonly型というジェネリック型も存在する

// type User9 = {
//   name: string
//   gender: string
// }

// type UserReadonly = Readonly<User9>

// let user9: User9 = {
//   name: 'Shohei',
//   gender: 'Male'
// }

// let userReadonly: UserReadonly = {
//   name: 'Shohei',
//   gender: 'Male'
// }

// user9.name = 'Yoshida'
// // userReadonly.name = "Yoshida"; エラーになる

// // unknown
// // anyよりも安全なコードが書けるようになる

// const x: unknown = 123
// const y: unknown = 'Hello'

// // 下記は二つともエラーになる
// // console.log(x.toFixed(1));
// // console.log(y.toLowerCase());

// if (typeof x === 'number') {
//   console.log(x.toFixed(1))
// }

// if (typeof y === 'string') {
//   console.log(y.toLowerCase())
// }

// // ちょっと動かなかったのでパス
// // // 非同期のAsync/Await
// // // 非同期処理APIのPromiseの簡易版にあたるものがAsync/Awaitの機能
// // function fetchFromServer(id: string): Promise<{ success: boolean }> {
// //     return new Promise((resolve) => {
// //         setTimeout(() => {
// //             resolve({ success: true });
// //         }, 100);
// //     });
// // }

// // // 非同期処理を含むasync functionの戻り値の型はPromiseとなります
// // async function asyncFunc(): Promise<string> {
// //     //Promiseな値はawaitすると中身が取り出せる（ように見える）
// //     const result = await fetchFromServer("111");
// //     return `The result: ${result.success}`;
// // }

// // //await構文を使うためにはasync functionの中で呼び出す必要があります
// // (async () => {
// //     const result = await asyncFunc();
// //     console.log(result);
// // })();

// // //Promiseとして扱う際は以下のように記述します
// // asyncFunc().then((result) => console.log(result));

// // p64の型定義ファイルは要復習・実装

// //typescriptの基礎修了



// let lines1: number[] = [1, 201]
// let a:number = Number(lines1[0]);
// let b:number = Number(lines1[1]);

// if (a > b) {
// console.log(a)
// } else {
//     console.log(b)
// }

// const array = [
//   "google",
//   "twitter",
//   "facebook",
//   "microsoft"
// ]
// console.log(array[0])

// // type Country = {
// //   "google": string;
// //   "twitter": string
// // }

// array[0] = "Amazon"

// console.log(array[0])

// type User = {
//     id: number;
//     email: string;
//     option: {
//         restrict: boolean;
//         tutorial: 'pending' | 'fix'
//     }
// }

// const initialUserOption: User["option"] = {
//     restrict: false,
//     tutorial: 'pending'
// }

// type Option = {
//     restrict: boolean;
//     tutorial: 'pending'| 'fix'
// }

// type User = {
//     id: number;
//     email: string;
//     option: Option
// }
// const initialUserOption: Option = {
//  restrict: false,
//  tutorial: 'pending'
// }


// console.log(initialUserOption)

// type User<T> = {
//     id: number;
//     email: string;
//     option: {
//         restrict: boolean;
//         tutorial: 'pending' | 'fix'
//         },
//     type: T
// }

// type AdminUser = User<'admin'>

// type GeneralUser = User<'general'>

// const a: GeneralUser = {
//   id: 1,
//   email: "addAb",
//   option: {
//     restrict: true,
//     tutorial: "fix"
//   },
// type: "general"

// }
// const b: AdminUser = {
//   id: 1,
//   email: "addAb",
//   option: {
//     restrict: true,
//     tutorial: "fix"
//   },
// type: "admin"

// }

// console.log(a)
// console.log(b)
