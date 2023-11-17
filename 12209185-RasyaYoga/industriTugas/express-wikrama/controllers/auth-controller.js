const dbConfig = require('../config/db-config');
const mysql = require ('mysql2');
const jwt = require ('jsonwebtoken');
// const { connect } = require('../router/auth-router');
// const { connection } = require('mysql2/typings/mysql/lib/Connection');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
});

const secretAccessToken = '2023-Firly-exp';

const register = (req, res) => {
    const email = req.body.email;
    const password = req.body.password;

    if (!email || !password ) {
        sendFailResponse(res, 422, 'Email atau Password tidak boleh kosong');
        return;
    }
    const data = {
        email: email,
        password: password,
    }
    const query = 'INSERT INTO users SET ?';

    pool.getConnection((err, connection)=>{
        if (err) throw err;

        connection.query(query, [data], (err, results)=>{
            if (err) throw err;

            if (results.affectedRows >= 1) {
                const user = {
                    email
                };
                const token = jwt.sign(user, secretAccessToken);
                sendAuthResponse(res, token, user);
                //berhasil
            }
            //gagal
            sendFailResponse(res, 500, 'Failed when creating user');
            return;
        });
        connection.release()

    });
}
const login = (req, res) => 
{
    const email = req.body.email;
    const password = req.body.password;

    if(!email || !password){
        sendFailResponse(res, 422, 'Email/Password wajib diisi');
        return;
    }

    const query = `SELECT users.email From users WHERE email = '${email}' AND password = '${password}';`;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [email, password], (err, results) => {
            if (err) throw err;

            if (results.length >= 1){
                const user = results.pop();

                const token = jwt.sign (
                    {
                         email: user.email
                    }, secretAccessToken
                );
                sendAuthResponse(res, token, user);
                return;
            }
            sendFailResponse(res, 404, 'Email/Password salah');
        });
        //remove connection => prevent memeory leak
        connection.release();
    });
}

const sendAuthResponse = (res, token, user) => res.status(200).json ({
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
};