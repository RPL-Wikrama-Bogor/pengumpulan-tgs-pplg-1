const dbConfig = require ('../config/db-config.js');
const mysql = require('mysql2');
const jwt = require('jsonwebtoken')
const pool = mysql.createPool(dbConfig);

pool.on('error', (err) => {
    console.log(err)
})

const accessToken = '123456789'

const register = (req, res) => {
    const email = req.body.email;
    const password = req.body.password;
    const data = {
        email: email,
        password: password
    };

    if (!email || !password) {
        sendFailResponse(res, 422, 'Email and password are required');
        return;
    } else {
        const checkEmailQuery = `SELECT * FROM users WHERE email = '${email}';`;

        pool.query(checkEmailQuery, (err, result) => {
            if (err) {
                res.send(err);
            } else {
                if (result.length > 0) {
                    sendFailResponse(res, 409, 'Email already exists');
                } else {
                    const insertQuery = `INSERT INTO users SET ? ;`;

                    pool.query(insertQuery, [data], (err, result) => {
                        if (err) {
                            res.send(err);
                        } else {
                            if (result.affectedRows >= 1) {
                                const user = {
                                    email
                                };
                                const token = jwt.sign(user, accessToken);

                                sendAuthResponse(res, token, {
                                    email
                                });
                            } else {
                                sendFailResponse(res, 500, 'Something went wrong');
                            }
                        }
                    });
                }
            }
        });
    }
};

const login = (req, res) => {
    if(!req.body.email || !req.body.password){
        sendFailResponse(res, 422, 'Email and password are required')
        return
    }

    const {email, password} = req.body
    let token;
    let user;

    const query = `SELECT * FROM users WHERE email = '${email}' AND password = '${password}';`

    pool.query(query, (err, result) => {
        if (err) {
            res.send(err)
        } else {
            if(result.length >= 0){
                user = result.pop();
                token = jwt.sign({email: user.email}, accessToken)
            }
        }

        sendAuthResponse(res, token, 'Login Success!', {
            email: user.email,
        })
    })
}


const sendAuthResponse = (res, token, user) => res.status(200).json({
    success: true,
    token: token,
    message: 'Authenticated successfully',
    user:user
})

const sendFailResponse = (res, statusCode, message) => res.status(statusCode).json({
    success: false,
    message: message
})

module.exports = {
    register, login, sendAuthResponse, sendFailResponse
}