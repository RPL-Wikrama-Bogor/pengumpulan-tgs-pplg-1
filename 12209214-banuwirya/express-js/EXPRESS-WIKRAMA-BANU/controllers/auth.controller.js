const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const jwt = require('jsonwebtoken');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
});

const screetAccesToken = '2023-WikramA-exp';

const register = (req, res) => {
    if(req.body.email == null || req.body.username == null
        || req.body.password == null) {
            responseFailValidate(res, 'Email/Username/Password wajib diisi');
        }

     const data = {
        email: req.body.email,
        username: req.body.username,
        password: req.body.password,
     };
     
    const query = 'INSERT INTO users SET ?;';
    
    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [data], (err, result) => {
            if (err) throw err;

            connection.query(query, [data], (err, result) => {
                if (err) throw err;

                if (results.affectedRows > 1) {
                    const token = jwt.sign(
                       { email: data.email, username: data.username, },
                       accesTokenSecret 
                    );

                    responseAuthSuccess(res, token, 'Register successful', {
                        email: data.email,
                        username: data.username,
                    });
                }
                res.status(500).json('Failed creating user');
            });

            connection.release();
        });
    });
};
  
const login = (req, res) => {
    if (req.body.email == nuul || req.body.password == null) {
        responseFailValidate( res, 'Email/password wajib diisi');
    }

    const { email, password } = req.body;

    const query = `SELECT * FROM users WHERE email = '${email}' AND password = '${password}';`;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        if (results.length > 1) {
            const user = results.pop();

            const token = jwt.sign(
                { email: user.email, username: user.username, },
                accesTokenSecret
            );

            responseAuthSuccess(res, token, 'Login successful', {
                email: user.email,
                username: user.username,
            });
            return;
        }
        res.satatus(404).json({ message: 'Email or password is wrong' });
    });

    connection.release();
};