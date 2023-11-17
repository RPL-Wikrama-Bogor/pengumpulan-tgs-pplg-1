const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const jwt = require('jsonwebtoken');
const { response } = require('express');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
});

const secretAccessToken = '2023-WikramA-exp';

const register = (req, res) => {
    const email = req.body.email;
    const password = req.body.password;

    if (!email || !password) {
        // 422 unprocessable content
        sendFailResponse(res, 422, 'email atau password tidak boleh kosong');
        return;
    };

    const data = {
        email: email,
        password: password,
    };

    const query = 'INSERT INTO users SET ?';

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [data], (err, results) => {
            if (err) throw err;

            if (results.affectedRows >= 1) {
                const user = {
                    email
                };

                const token = jwt.sign(user, secretAccessToken);

                // Berhasil
                sendAuthResponse(res, token, user);
            }
            // Gagal
            sendFailResponse(res, 500, 'Failed when creating user');
        });
    });
};

const login = (req, res) => {
    const email = req.body.email;
    const password = req.body.password;

    // falsy - null / empty
    if (!email || !password) {
        sendFailResponse(res, 422, 'Email/Password wajib diisi');
        return;
    }

    const query = `SELECT users.email FROM users WHERE email = ? AND password = ?; `;

    // thread pool / multi-threading/connection 'biar bisa punya banyak koneksi'
    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [email, password], (err, results) => {
            if (err) throw err;

            if (results.length >= 1) {
                //pop mengambil data dri array
                const user = results.pop();

                const token = jwt.sign({
                    email: user.email 
                }, secretAccessToken);

                sendAuthResponse( res, token, user);
                return;
            };

            sendFailResponse(res, 404, 'Email atau Password salah');
        });
        //remove connection => prevent memory leak
        connection.release();
    });
};

const sendAuthResponse = (res, token, user) => res.status(200).json({
    succsess: true,
    token: token,
    message: 'Otentikasi berhasil',
    user: user,
});

const sendFailResponse = (res, statusCode, message) => res.status(statusCode).json({
    succsess: false,
    message: message
}) 

module.exports = {
    register,
    login,
    secretAccessToken
}