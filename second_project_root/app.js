const http = require('http');
const fs = require('fs');
const url = require('url');
const express = require('express');
const mysql = require('mysql');
const app = express();

const indexPage = fs.readFileSync('./index.html', 'UTF-8');
const appPage = fs.readFileSync('./html/app.html', 'UTF-8');
const discoveryPage = fs.readFileSync('./html/discovery.html', 'UTF-8');
const html_cssPage = fs.readFileSync('./html/html&css.html', 'UTF-8');
const jsPage = fs.readFileSync('./html/js.html', 'UTF-8');
const myIntroPage = fs.readFileSync('./html/myIntro.html', 'UTF-8');
const appAddedPage = fs.readFileSync('./html/appPage_added.html', 'UTF-8');

const resetCss = fs.readFileSync('./css/reset.css', 'UTF-8');
const styleCss = fs.readFileSync('./css/common.css', 'UTF-8');
const appPageCss = fs.readFileSync('./css/eachPage/appPage.css', 'UTF-8');
const html_cssPageCss = fs.readFileSync('./css/eachPage/html&cssPage.css', 'UTF-8');
const indexCss = fs.readFileSync('./css/eachPage/index.css', 'UTF-8');
const jsPageCss = fs.readFileSync('./css/eachPage/jsPage.css', 'UTF-8');
const myIntroCss = fs.readFileSync('./css/eachPage/myIntro.css', 'UTF-8');
const discoveryCss = fs.readFileSync('./css/eachPage/discovery.css', 'UTF-8');
const scriptJs = fs.readFileSync('./js/script.js', 'UTF-8');


const hostname = '127.0.0.1';
const port = 3000;

const server = http.createServer(RouteSetting);

server.listen(port, hostname, () => {
    console.log(`Server running at http://${hostname}:${port}/`);
});

function RouteSetting(req, res) {
    const url_parts = url.parse(req.url);
    const connection = mysql.createConnection({
        host: 'localhost',
        user: 'root',
        password: '1226',
        database: 'list_app'
    });

    // ここからがつけたし
    if (req.method === 'GET') {

        res.writeHead(200, {
            'Content-Type': 'text/html'
        });
        // res.end(html);

    } else if (req.method === 'POST') {
        var data = '';

        //POSTデータを受けとる
        req.on('data', function (chunk) {
            console.log(chunk);
            data += chunk
        }).on('end', function () {

            // console.log(data);
            // res.end(html);
            // データの更新
            // connection.query(
            //     'UPDATE users SET name = ? Where ID = ?',
            //     [data, 9],
            //     (err, result) => {
            //         if (err) throw err;
            //         console.log(`Changed ${result.changedRows} row(s)`);
            //     }
            // );
            // データの検索
            connection.query('SELECT * FROM users', (err, rows) => {
                if (err) throw err;

                console.log('うまく行ってる証:\n');
                console.log(rows);
            });
            // ＃＃＃＃＃＃＃＃ここでdataをDBに入れてみる＃＃＃＃＃＃＃＃
            // データの追加
            const newUser = {
                name: data,
            };
            connection.query('INSERT INTO users SET ?', newUser, (err, res) => {
                if (err) throw err;

                console.log('Last insert ID:', res.insertId);
            });
        })
    }
    // // ここに書くとうまくいく
    connection.query('SELECT * FROM users', (err, rows) => {
        if (err) throw err;

        console.log('うまく行ってる証:\n');
        console.log(rows);
    });
    // connection.query(
    //     'UPDATE users SET name = ? Where ID = ?',
    //     [data, 9],
    //     (err, result) => {
    //         if (err) throw err;
    //         console.log(`Changed ${result.changedRows} row(s)`);
    //     }
    // );


    switch (url_parts.pathname) {
        case '/':
        case '/index.html':
            res.writeHead(200, {
                'Content-Type': 'text/html'
            });
            res.write(indexPage);
            res.end();
            break;
        case '/html/app.html':
            res.writeHead(200, {
                'Content-Type': 'text/html'
            });
            res.write(appPage);
            res.end();
            break;
        case '/html/discovery.html':
            res.writeHead(200, {
                'Content-Type': 'text/html'
            });
            res.write(discoveryPage);
            res.end();
            break;
        case '/html/html&css.html':
            res.writeHead(200, {
                'Content-Type': 'text/html'
            });
            res.write(html_cssPage);
            res.end();
            break;
        case '/html/js.html':
            res.writeHead(200, {
                'Content-Type': 'text/html'
            });
            res.write(jsPage);
            res.end();
            break;
        case '/html/myIntro.html':
            res.writeHead(200, {
                'Content-Type': 'text/html'
            });
            res.write(myIntroPage);
            res.end();
            break;
        case '/html/appPage_added.html':
            res.writeHead(200, {
                'Content-Type': 'text/html'
            });
            res.write(appAddedPage);
            res.end();
            break;


            // CSSを繋いでるとこ
        case '/css/reset.css':
            res.writeHead(200, {
                'Content-Type': 'text/css'
            });
            res.write(resetCss);
            res.end();
            break;
        case '/css/common.css':
            res.writeHead(200, {
                'Content-Type': 'text/css'
            });
            res.write(styleCss);
            res.end();
            break;

        case '/css/eachPage/appPage.css':
            res.writeHead(200, {
                'Content-Type': 'text/css'
            });
            res.write(appPageCss);
            res.end();
            break;

        case '/css/eachPage/html&cssPage.css':
            res.writeHead(200, {
                'Content-Type': 'text/css'
            });
            res.write(html_cssPageCss);
            res.end();
            break;

        case '/css/eachPage/index.css':
            res.writeHead(200, {
                'Content-Type': 'text/css'
            });
            res.write(indexCss);
            res.end();
            break;
        case '/css/eachPage/jsPage.css':
            res.writeHead(200, {
                'Content-Type': 'text/css'
            });
            res.write(jsPageCss);
            res.end();
            break;
        case '/css/eachPage/myIntro.css':
            res.writeHead(200, {
                'Content-Type': 'text/css'
            });
            res.write(myIntroCss);
            res.end();
            break;
        case '/css/eachPage/discovery.css':
            res.writeHead(200, {
                'Content-Type': 'text/css'
            });
            res.write(discoveryCss);
            res.end();
            break;
            // jsファイルを繋いでいる
        case '/js/script.js':
            res.writeHead(200, {
                'Content-Type': 'text/plain'
            });
            res.write(scriptJs);
            res.end();
            break;
            // ルーティングがうまく行ってない時
        default:
            res.writeHead(200, {
                'Content-Type': 'text/plain'
            });
            res.end('here????');
            break;
    }
}




// MySQLの読み込み
// const express = require('express');
// const mysql = require('mysql');

// const app = express();

// const path = requre("path")
// app.get('/', (req, res) => res.sendFile(__dirname + '/index.html'));

// // mysqlの接続情報
// app.get('/api/hello', (req, res) => {
//     const connection = mysql.createConnection({
//         host: 'localhost',
//         user: 'root',
//         password: '1226',
//         database: 'list_app'
//     });
//     connection.connect();
//     connection.query('SELECT * FROM messages', function (error, results, fields) {
//         if (error) throw error;
//         console.log(results[0]);
//         res.send(results[0].message);
//         connection.end();
//     });
// });

// // 接続できなていない時にエラーを表示する
// connection.connect((err) => {
//     if (err) {
//         console.log('エラーですよおおおお？？: ' + err.stack);
//         return;
//     }
//     console.log('繋がったあああ！');
//     connection.end();
// });


// '/'のルーティング
// app.get('/', (req, res) => {
//     connection.query(
//         'SELECT * FROM users',
//         (error, results) => {
//             console.log(results);
//             res.render('');
//         }
//     );
// });
// var f = require('./js/script');
// console.log(f.func());

// exports.func = function () {
//     return "Foo";
// };


// app.listen(3000, function () {
//     console.log('Example app listening on port 3000!');
// });




// // データの更新
// connection.query(
//     'UPDATE users SET name = ? Where ID = ?',
//     ['苦戦中', 9],
//     (err, result) => {
//         if (err) throw err;

//         console.log(`Changed ${result.changedRows} row(s)`);
//     }
// );
// // );

// // データの削除
// connection.query(
//     'DELETE FROM users WHERE id = ?', [10], (err, result) => {
//         if (err) throw err;

//         console.log(`Deleted ${result.affectedRows} row(s)`);
//     }
// );

// // データの検索
// function enterInfo() {
// connection.query('SELECT * FROM users', (err, rows) => {
//     if (err) throw err;

//     console.log('Data received from Db:\n');
//     console.log(rows);
// });

// connection.end();

// };

// enterInfo();

// 動かなかった残骸（原因は理解不足）
// const http = require('http');
// const fs = require('fs');
// const url = require('url');

// const indexPage = fs.readFileSync('./appPage.html', 'UTF-8');
// // const otherPage = fs.readFileSync('./html/other.html', 'UTF-8');
// const styleCss = fs.readFileSync('./css/common.css', 'UTF-8');
// const scriptJs = fs.readFileSync('./js/script.js', 'UTF-8');

// const hostname = '127.0.0.1';
// const port = 3000;

// const server = http.createServer(RouteSetting);

// server.listen(port, hostname, () => {
//     console.log(`Server running at http://${hostname}:${port}/`);
// });

// function RouteSetting(req, res) {
//     const url_parts = url.parse(req.url);
//     switch (url_parts.pathname) {
//         case '/':
//         case '/index.html':
//             res.writeHead(200, {
//                 'Content-Type': 'text/html'
//             });
//             res.write(indexPage);
//             res.end();
//             break;

//         case '/css/style.css':
//             res.writeHead(200, {
//                 'Content-Type': 'text/css'
//             });
//             res.write(styleCss);
//             res.end();
//             break;

//         case '/js/script.js':
//             res.writeHead(200, {
//                 'Content-Type': 'text/plain'
//             });
//             res.write(scriptJs);
//             res.end();
//             break;

//         default:
//             res.writeHead(200, {
//                 'Content-Type': 'text/plain'
//             });
//             res.end('お探しのページは見つかりません。');
//             break;
//     }
// }



// const http = require('http');
// const fs = require('fs');
// const url = require('url');


// // const index = fs.readFile('./index.html', 'UTF-8', (error, data) => {
// //     response.writeHead(200, {
// //         'Content-Type': 'text/html'
// //     });
// //     response.write(data);
// //     response.end();
// // })
// const reset_css = fs.readFileSync('./css/rest.css', 'utf8');
// const common_css = fs.readFileSync('./css/common.css', 'utf8');
// const appPage_css = fs.readFileSync('./css/eachPage/appPage.css', 'utf8');

// var server = http.createServer(getFromClient);
// server.listen(3000);
// console.log('Server start!');


// // var server = http.createServer(
// //     (request, response) => {
// //         fs.readFile('./appPage.html', 'UTF-8', (error, data) => {
// //             response.writeHead(200, {
// //                 'Content-Type': 'text/html'
// //             });
// //             response.write(data);
// //             response.end();
// //         })

// //     }
// // );

// function getFromClient(request, response) {

//     var url_parts = url.parse(request.url);
//     // console.log(url_parts)
//     switch (url_parts.pathname) {


//         case '/':
//             fs.readFile('./index.html', 'UTF-8', (error, data) => {
//                 response.writeHead(200, {
//                     'Content-Type': 'text/html'
//                 });
//                 response.write(data);
//                 response.end();
//             })
//             // var content = ejs.render(index, {
//             //     title: 'appPage',
//             //     today: datetoday,
//             // });
//             // res.writeHead(200, {
//             //     'Content-Type': 'text/html'
//             // });
//             // res.write(data);
//             // res.end();
//             // break;
//             // case '/':
//             //     var content = ejs.render(sample, {
//             //         title: 'introduction',
//             //         today: datetoday,
//             //     });
//             //     res.writeHead(200, {
//             //         'Content-Type': 'text/html'
//             //     });
//             //     res.write(content);
//             //     res.end();
//             //     break;
//         case './css/common.css':
//             response.writeHead(200, {
//                 'Content-Type': 'text/css'
//             });
//             response.write(common_css);
//             response.end();
//             break;
//         default:
//             response.writeHead(404, {
//                 'Content-Type': 'text/plain'
//             });
//             response.end('no page...');
//             break;
//     }
// }


// expressを使ったやつ
// const express = require('express');

// const app = express();

// app.get('/', (req, res) => {
//     res.render('../appPage.html');
// });

// app.listen(3000);



// const index = fs.readFileSync('../appPage.html', 'utf8');
// // const sample = fs.readFileSync('./sample.ejs', 'utf8');
// const reset_css = fs.readFileSync('../css/rest.css', 'utf8');
// const common_css = fs.readFileSync('../css/common.css', 'utf8');
// const appPage_css = fs.readFileSync('../css/eachPage/appPage.css', 'utf8');


// var server = http.createServer(getFromClient);
// server.listen(3000);
// console.log('Server start!');


// function getFromClient(req, res) {

//     var url_parts = url.parse(req.url);
//     // console.log(url_parts)
//     switch (url_parts.pathname) {


//         case '/':
//             // var content = ejs.render(index, {
//             //     title: 'appPage',
//             //     today: datetoday,
//             // });
//             res.writeHead(200, {
//                 'Content-Type': 'text/html'
//             });
//             res.write(data);
//             res.end();
//             break;
//             // case '/':
//             //     var content = ejs.render(sample, {
//             //         title: 'introduction',
//             //         today: datetoday,
//             //     });
//             //     res.writeHead(200, {
//             //         'Content-Type': 'text/html'
//             //     });
//             //     res.write(content);
//             //     res.end();
//             //     break;
//         case '/style.css':
//             res.writeHead(200, {
//                 'Content-Type': 'text/css'
//             });
//             res.write(style_css);
//             res.end();
//             break;
//         default:
//             res.writeHead(404, {
//                 'Content-Type': 'text/plain'
//             });
//             res.end('no page...');
//             break;
//     }
// }