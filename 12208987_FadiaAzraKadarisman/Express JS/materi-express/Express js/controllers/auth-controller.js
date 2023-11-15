const dbConfig = require('../config/db-config.js');
const mysql = require('mysql2');
const jwt = require('jsonwebtoken');
const pool = mysql.createPool(dbConfig); // nyambungin code sm databse

pool.on('error', (error) =>{
    console.log(error);
});

const secretAccessToken = '2023-FadiaAzra-express';
const register = (req, res) => {
    const email = req.body.email;
    const password = req.body.password;
    // const {email, password} = req.body;

    if (email == null || password == null) {
        // 422 Unprocessable Content
        sendFailResponse(res, 422, 'Email atau password tidak boleh kosong'); // 422 memberitahu front end bahwa data tidak bisa di olah
        return;
    }

    const data = {
        email: email,
        password: password,
    }

    const query = 'INSERT INTO users SET ?';
    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [data], (err, results) => {
            if (err) throw err;

            if (results.affectedRows >= 1) {
                //Berhasil
                const user = {
                    email
                }
                // .sign untuk mengenerate
                const token = jwt.sign(user, secretAccessToken);
                sendAuthResponse(res, token, user);
            }
            //Gagal
            sendFailResponse(res, 500, 'Fail when creating user');
        });
        connection.release();
    });
};
const login = (req,res) => {
    const email = req.body.email;
    const password = req.body.password;

    if (!email || !password) {
        sendFailResponse(res, 422, 'Email/Password wajid di isi');
    };
    // const data = {
    //     email: email,
    //     password: password,
    // }

    const query = 'SELECT users.email FROM users WHERE email = ? AND password = ? ;'
    //Thread pool / multi-threading / connection/ atau awal mula sambungan koneksi
    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [email, password], (err, results) => {
            if (err) throw err;

            if (results.length >= 1) {
                //menghapus element pertama pada array lalu mneggati menjadi menjadi variable baru
                const user = results.pop();

                const token = jwt.sign({
                    email: user.email
                }, secretAccessToken);

                sendAuthResponse(res, token, user);
                return;
            }
            sendFailResponse(res, 404, 'Email or Password is wrong');
        });
        // Remove connection => supaya tidak ada kebocoran memori, memori akan trs berjalan apabila tidak di release
        connection.release();
    });
    

};
const sendAuthResponse = (res, token, user) => res.status(200).json({
    success: true,
    token: token,
    message: 'Otentifikasi berhasil',
    user: user,
});
const sendFailResponse = (res, statusCode, message) => res.status(statusCode).json({
    success: false,
    message: message
});

module.exports = {
    register, login, secretAccessToken
}