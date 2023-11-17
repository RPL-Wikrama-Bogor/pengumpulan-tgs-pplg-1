const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const jwt = require('jsonwebtoken');
// const { connect } = require('../router/auth-router');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
});

// JWT = untuk

// pembuatan tokennya dari mana ??? 

const secretAccessToken = 'Dimas-Ramadhan';
const register = (req, res) => { 
    const email = req.body.email;
    const password = req.body.password;

    if(!email || !password) {
        // 422 Unprocessable Content
        sendFailResponse(res, 422, 'Email atau Password tidak boleh kosong');
        return;
    }

    const data = {
        email: email,
        password: password,
    }

    const query = 'INSERT INTO users SET ?';
    pool.getConnection((err, connection) => {
        connection.query(query, [data], (err, results) => {
            if (err) throw err;

            if (results.affectedRows >= 1){
                const user = {
                    email
                };

                const token = jwt.sign(user, secretAccessToken);
                // Berhasil
                sendAuthResponse(res, token, user);
                return;
            }
            // Gagal
            sendFailResponse(res, 500, 'Failed when creating user');
        });
    });
};
const login = (req, res) => {
    const {email, password} = req.body;
    if (!email || !password) {
        sendFailResponse(res, 422, 'Email/Password tidak boleh kosong');
        return;
    }

    const query = `SELECT users.email FROM users WHERE email = '${email}' AND password = '${password}' ; `;

    // Thread Pool / Multi-Threading/connection 
    // pool = dijalankan secara bersamaan dan ditampung dulu (menyambungkan const dan database)
    pool.getConnection((err, connection) => {
        if(err) throw err;

        connection.query(query, [email, password], (err, results) => {
            if(err) throw err;

            if(results.length >= 1){
                // pop = menghapus array pertama dan memasukannya ke variable baru
                const user = results.pop();

                const token = jwt.sign(
                    { email: user.email }, secretAccessToken
                );

                sendAuthResponse(res, token, user);
                //     {
                //     email: user.email
                // });
                return;
            }
            sendFailResponse(res, 404, 'Email atau password salah');
            // res.status(404).json({ message: 'Email or Password is wrong' });
        });
        // Remove connection => prevent memory leak
        connection.release();
    });
};
const sendAuthResponse = (res, token, user) => res.status(200).json({
    succes : true,
    token: token,
    message: 'Otentikasi berhasil',
    user: user,
});

const sendFailResponse = (res, statusCode, message) => res.status(statusCode).json ({
    succes: false,
    message: message,
});

module.exports = {
    register, login, secretAccessToken
};