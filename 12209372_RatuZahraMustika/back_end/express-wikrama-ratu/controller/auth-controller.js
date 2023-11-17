const dbConfig = require('../config/db-config');
const mysql = require ('mysql2');
const jwt = require('jsonwebtoken');
const { response } = require('express');
// const { Connection } = require('mysql2/typings/mysql/lib/Connection');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
});

const secretAccessToken = '2023-WikramA-exp';

const register = (req, res) => {
    const email = req.body.email;
    const password = req.body.password;

    if (email == null || password == null) {
        //422 Unprocsessable Content
        sendFailResponse(res, 422, 'Email atau password tidak boleh kosong');
        return;
    }

    const data = {
        email: email,
        password: password,
    }

    const query = 'INSERT INTO users SET ?';

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [data], (err, results) => 
        {
            if (err) throw err;

            if (results.affectedRows >= 1) {
                const user = {
                    email
                };

                const token = jwt.sign(user, secretAccessToken);

                //berhasil
                sendAuthResponse(res, token, user);
            }
            //Gagal
            sendFailResponse(res, 500, 'Failed when creating user');

        });
    });
}

const login = (req, res) => {
    const email = req.body.email;
    const password = req.body.password;

    if (!email || !password) {
        sendFailResponse(res, 422, 'Email/Password wajib diisi');
        return
    }

    //const query = `SELECT * FROM users WHERE email = ? AND password = ?;`; buat manggil biasa
    //buat manggil / nunjukin email aja
    const query = `SELECT users.email FROM users WHERE email = ? AND password = ?;`;


    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [email, password], (err, results) => {
            if (err) throw err;

            //pop yaitu ngambil data dari array
            if (results.length >= 1) {
                const user = results.pop();

                const token = jwt.sign(
                    { email: user.email },
                    secretAccessToken
                );

                sendAuthResponse(res, token, user);
                return;
            }

            sendFailResponse(res, 404, 'Email atau password salah');
        });
        //remove connection => prevent memory leak
        connection.release();
    });
};

const sendAuthResponse = (res, token, user) => res.status(200).json({
    success: true,
    token: token,
    message: 'Otentikasi berhasil',
    user: user
});

const sendFailResponse = (res, statusCode, message) => res.status(statusCode).json({
    success: false,
    message: message,
});

module.exports = {
    register, 
    login,
    secretAccessToken
}