const dbConfig = require('../config/db_config');
const mysql = require('mysql2');
const jwt = require('jsonwebtoken');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
});

const secretAccessToken = '2023-astyzzz';

const register = (req, res) => {
    // 422 Unprocessable Content
    const email = req.body.email;
    const password = req.body.password;

    if(!email || !password){
        sendFailResponse(res, 422, 'Email atau Password tidak boleh kosong');
        return;
    }

    const data = {
        email: email,
        password: password
    }

    const query = 'INSERT INTO users SET ?';

    pool.getConnection((err, connection) => {
        if(err) throw err;

        connection.query(query, [data], (err, results) => {
            if(err) throw err;

            if (results.affectedRows >= 1){
                const user = {
                    email
                };

                const token = jwt.sign(user, secretAccessToken);

                sendAuthResponse(res, token, user);
                return;
            }
            sendFailResponse(res, 500, 'Failed when creating user');
        });
    });

}
const login = (req, res) => {
    const { email, password } = req.body;
    
    if(!email == null || !password){
        sendFailResponse(res, 422, 'Email/password wajib diisi');
        return;
    }

    // select email saja dengan cara users.email
    const query = `SELECT users.email FROM users WHERE email  = '${email}' AND password = '${password}' ;`;

    // Thread pool / nulti-threading/connection
    pool.getConnection((err, connection) => {
        if(err) throw err;

        connection.query(query, [email, password], (err, results) => {
            if(err) throw err;

            if(results.length >= 1){
                // array pop menghapus email pertama dan memasukannya kedalam variable 
                const user = results.pop();

                const token = jwt.sign({
                    email: user.email,
                }, secretAccessToken);

                sendAuthResponse(res, token, user);
                return;
            }

            sendFailResponse(res, 404, 'email atau password salah');
        });
        // remove connection => prevent memory leak
        connection.release();

    });
  
}

const sendAuthResponse = (res, token, user) => res.status(200).json({
    success: true,
    token: token,
    message: 'Otentikasi berhasil',
    user: user,
});

const sendFailResponse = (res, statusCode, message) => res.status(statusCode).json({
    success: false,
    message: message,
});

module.exports = {
    register, login,
    secretAccessToken
}