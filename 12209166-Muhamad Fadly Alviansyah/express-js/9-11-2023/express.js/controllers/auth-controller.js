const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const jwt = require('jsonwebtoken');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
  console.log(error);
})

const secretAccessToken = '2023-Wikrama-exp';

const register = (req, res) => {
  const email = req.body.email;
  const password = req.body.password;

  if (email == null || password == null) {
    // ? 422 Unprocessable Content
    sendFailResponse(res, 422, 'Email atau password tidak boleh kosong');
    return;
  }

  const data = {
    email: email,
    password: password,
  }

  const query = 'INSERT INTO users SET ?;';

  pool.getConnection((err, connection) => {
    if (err) throw err;

    connection.query(query, [data], (err, results) => {
      if (err) throw err;

      if (results.affectedRows >= 1) {
        const user = {
          email
        };

        const token = jwt.sign(user, secretAccessToken);

        sendAuthResponse(res, token, user);
      }
      sendFailResponse(res, 500, 'Failed when creating user');
    });
  });
};

const login = (req, res) => {

};

const sendAuthResponse = (res, token, user) => res.status(200).json({
  success: true,
  token: token,
  message: 'Autentikasi berhasil',
  user: user,
});

const sendFailResponse = (res, statusCode, message) => res.status(statusCode).json({
  success: false,
  message: message,
});

module.exports = {
  register, login
}