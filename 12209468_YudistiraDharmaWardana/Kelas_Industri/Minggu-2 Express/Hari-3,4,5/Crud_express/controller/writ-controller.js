const dbConfig = require('../config/db_config');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);
const jwt = require('jsonwebtoken');
pool.on('error' , (error) =>{
    console.log(error);
})
const secretAcsessToken = 'User-Company';

const register = (req,res) =>{
    const email = req.body.email;
    const password = req.body.password;

    if(!email|| !password){
        //422 unprocessable content
        sendFailResponse(res, 422, 'Email atau Password wajib di isi');
        return;
    };
    const data = {
        email: email,
        password: password,
    }
    const query = 'INSERT INTO users SET ?';

    pool.getConnection((err, connection)=>{
            connection.query(query, [data] ,(err, results) => {
                if(err) throw err;

                if(results.affectedRows >= 1){
                    const user ={
                        email
                    };  

                    const token = jwt.sign(user,secretAcsessToken);

                    sendWriteResponse(res, token, user);
                    return;
                }
                sendFailResponse(res, 500, 'failed creating user')
            })
        });
}
const login = (req,res) =>{
    const email=  req.body.email;
    const password =  req.body.password;

    const query = `SELECT * FROM users WHERE email = ? And password= ?;`

    if(!email  || !password ){
        sendFailResponse(res , 422 ,'Email atau Password wajib di isi');
        return;
    }
    pool.getConnection((err, connection) =>{
        if(err) throw err;

        connection.query(query, [email, password] ,(err,results)=>{
            if(err) throw err;

            if(results.length >= 1){

                // results.pop = mengambil user dari array user dan ditaruh pada variable user;
                const user = results.pop();

                const token = jwt.sign(
                    {
                        email: user.email ,
                    },
                    secretAcsessToken
                );
                sendWriteResponse(res , token ,{
                    email: user.email ,
                }, secretAcsessToken)

                return;
            }
            sendFailResponse(res , 404, 'Email atau Password salah ');
        })
        //Remove connerction => prevent memory leak
        connection.release();
    })
}
const sendWriteResponse = (res,token, user) =>{
    res.status(200).json({
        sucsess: true,
        token: token,
        Message: 'otentikasi berhasil',
        user: user,
    })
}
const sendFailResponse = (res,statusCode, message) =>{
    res.status(statusCode).json({
        sucsess: false,
        message: message,
    })
}

module.exports = {
    register,
    login,
    secretAcsessToken,
}