const express = require('express');
const mysql = require('mysql');
const app = express();
app.use(express.static('public'));
app.use(express.urlencoded({
    extended: false
}));

const connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '1226',
    database: 'qlip'
});

app.get('/', (req, res) => {
    res.render('index.ejs')
});

app.get('/show', (req, res) => {
    connection.query(
        'SELECT * FROM users',
        (error, results) => {
            res.render('show.ejs', {
                users: results
            });
        }
    );
});

app.get('/list', (req, res) => {
    connection.query(
        'SELECT * FROM users',
        (error, results) => {
            res.render('list.ejs', {
                users: results
            });
        }
    );
});

app.get('/new', (req, res) => {
    res.render('new.ejs')
});

app.post('/create', (req, res) => {
    connection.query(
        'INSERT INTO users (name,contact,memory) VALUES(?,?,?)',
        [
            [req.body.nameInfo],
            [req.body.contactInfo],
            [req.body.memoryInfo]
        ],
        (error, results) => {
            res.redirect('/');
        }
    );
});

app.post('/delete/:id', (req, res) => {
    connection.query(
        'DELETE FROM users WHERE id=?',
        [req.params.id],
        (error, results) => {
            res.redirect('/list')
        }
    );
});

app.get('/edit/:id', (req, res) => {
    connection.query(
        'SELECT * FROM users WHERE id=?',
        [req.params.id],
        (error, results) => {
            res.render('edit.ejs', {
                item: results[0]
            });
        }
    );
});

app.post('/update/:id', (req, res) => {
    connection.query(
        'UPDATE users SET name = ?, contact = ?, memory = ? WHERE id = ?',
        [
            [req.body.nameInfo],
            [req.body.contactInfo],
            [req.body.memoryInfo],
            [req.params.id]
        ],
        (error, results) => {
            res.redirect('/list');
        }
    );
});


app.listen(2002);