const mysql = require('mysql');

const db = mysql.createConnection({
    user: 'root',
    password: '',
    host: 'localhost',
    database: 'api-cyberlabs'
})

module.exports = db;