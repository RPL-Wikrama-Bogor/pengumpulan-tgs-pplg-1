const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const jwt = require('jsonwebtoken')
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
})

const secretAccessToken = '2023-WikramA-exp';

const register = (req,res) => {
    const email = req.body.email;
    const password = req.body.password;

    if(email == null || password == null){
        // 422 Unprocessable Content
        sendFailResponse(res, 422, 'Email or password must not be empty');
        return;
    };

    const data = {
        email: email,
        password: password,
    }

    const query = 'INSERT INTO users SET ?;';


    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, [data], (error, results) => {
            if (error) throw error;
            
            if (results.affectedRows >= 1){
                const user = {
                    email
                };

                const token = jwt.sign(user,secretAccessToken);

                sendAuthResponse(res, token, user);
                return;
            }

            sendFailResponse(res, 500, "Failed user creation.")

        });
    });
};
const login = (req, res) => {
    const email = req.body.email;
    const password = req.body.password;
    
    if (!email || !password) {
        sendFailResponse(res, 422, 'Email/Password required');
        return;
    }

    const query = 'SELECT * FROM users WHERE email = ? AND password = ?;';

    //Thread Pool / Multi-threading/Connection
    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [email, password], (err, results) => {
            if (err) throw err;

            if (results.length >= 1) {

                const user = results.pop();

                const token = jwt.sign(
                    { email: user.email, },
                    secretAccessToken
                );

                sendAuthResponse(res, token, user);
                return;
            };
            sendFailResponse(res, 404, 'Email/password invalid');

        });
        // Remove connection => prevent memory leak
        connection.release();
    });
};
const sendAuthResponse = (res,token,user) => res.status(200).json({
    success: true,
    token: token,
    message: 'Logged in.',
    user: user
});
const sendFailResponse = (res,statusCode,message) => res.status(statusCode).json({
    success: false,
    message: message
});

module.exports = {
    register, login,
    sendAuthResponse,
    sendFailResponse
};
