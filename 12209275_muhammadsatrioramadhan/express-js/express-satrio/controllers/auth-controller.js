const dbConfig = require("../config/db-config");
const mysql = require("mysql2");
const jwt = require("jsonwebtoken");
const pool = mysql.createPool(dbConfig);

pool.on("error", (error) => {
    console.log(error);
});

const secretAccessToken = "2023-Wikrama-exp";

const register = (req,res) => {
    const email = req.body.email;
    const password = req.body.password;

    if (!email || !password) {
        //422 unprocessable Content
        sendFailResponse(res, 422, "email atau password tidak boleh kosong");
        return;
    }

    const data = {
        email: email,
        password: password,
    }

    const query = 'INSERT INTO user SET ?';

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [data], (err,results) => {
            if (err) throw err;
            if (results.affectedRows >= 1) {
                const user = {
                    email
                };
                const token = jwt.sign(user, secretAccesToken);
                //berhasil
                sendAuthResponse(res, token, user);
            }
            //gagal
            sendFailResponse(res, 500, 'Failed when creating user');
        });
    });
}
const login = (req,res) => {
    const email = req.body.email;
    const password = req.body.password;
    if (!email || !password) {
        sendFailResponse(res,422, `Email/Password wajib diisi`);
    }

    const query = `SELECT user.email FROM user WHERE email = ? AND password = ?;`;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query , [email, password], (err, results) => {
            if (err) throw err;

            if(results.length >= 1) {
                const user = results.pop();

                const token = jwt.sign(user, secretAccessToken);

                sendAuthResponse(res, token, user);
                return;
            }
            sendFailResponse(res, 404, 'Email atau password salah');
        });

        connection.release();
    })
}
const sendAuthResponse = (res, token, user) => res.status(200).json({
    success: true,
    token: token,
    message: 'Authentication Success',
    user: user
  })
  const sendFailResponse = (res, statusCode, message) => res.status(statusCode).json({
    succss: false,
    message: message
  })

module.exports = {
    register,login, secretAccessToken
}