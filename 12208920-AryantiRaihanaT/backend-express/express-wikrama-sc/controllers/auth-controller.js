const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const jwt = require('jsonwebtoken');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
});

const secretAccessToken = '2023-wikramA-exp';

const register = (req, res) => {
    const email = req.body.email;
    const password = req.body.password;

    if(!email | !password) {
        // 422 Unprocessable Content
        sendFailResponse(res, 422, 'email atau password tidak boleh kosong');
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

            if(results.affectedRows >= 1)
            {
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
}

const login = (req, res) => {
    const email = req.body.email; 
    const password = req.body.password;

    //Falsy - Null / Empty maka nilai nya menjadi false
    if (!email || !password) {
        sendFailResponse(res, 'Email/Password wajib diisi');
        return;
    }

    // Thread Pool/Multi Threading / Connection
    const query = `SELECT users.email FROM users WHERE email = ? AND password = ?;`;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [email, password], (err, results) => {
            if (err) throw err;

            if (results.length >= 1) {
                const user = results.pop(email);

                // digenerate
                const token = jwt.sign({ 
                    email : user.email
                }, secretAccessToken);

                sendAuthResponse(res, token, user);
                return;
            };

            sendFailResponse(res, 404, 'Email/Password salah');
        });

        //remove connection => prevent memory leak
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
    register, login, secretAccessToken
}