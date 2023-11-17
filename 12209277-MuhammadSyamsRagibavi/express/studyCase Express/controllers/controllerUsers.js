const dbConfig = require('../config/dbConfig')
const mysql = require('mysql2')
const pool = mysql.createPool(dbConfig)
const jwt = require('jsonwebtoken')
const accessToken = '123456789'

pool.on('error', (err) => {
    console.log(err)
})

const register = (req, res) => {
   const  data = {
        email: req.body.email,
        username: req.body.username,
        password: req.body.password
    }

    const checkQuery = `SELECT * FROM users WHERE email = ?`
    const checkParams = [data.email];

    pool.query(checkQuery, checkParams, (err, result) => {
        if (err) {
            console.log(err)
        } 
        if(!data.email || !data.username || !data.password){
            res.json({
                message: "Please enter all fields"
            })
        }
        else {
           if(result.length > 0) {
               res.json({
                   message: "Email already exists"
               })
           }else{
                const query = `INSERT INTO users SET ?`

                pool.query(query, [data], (err, result) => {
                    if (err) {
                        console.log(err)
                    }else{
                        res.json({
                            message: "User created successfully"
                        })
                    }
                })
           }
        }
    })
}

const login = (req, res) => {
    let token;
    let user;
    const data = {
        email: req.body.email,
        password: req.body.password
    }

    const query = `SELECT * FROM users WHERE email = '${data.email}' AND password = '${data.password}'`

    if(!data.email || !data.password){
        res.json({
            message: "Please enter all fields"
        })
    }else{
        pool.query(query, (err, result) => {
            if(err){
                console.log(err)
            }else{
                if(result.length > 0){
                    user = result[0]
                    token = jwt.sign({user}, accessToken)
                    res.json({
                        message: "Login successful",
                        token
                    })
                }else{
                    res.json({
                        message: "Invalid email or password"
                    })
                }
            }
        })
    }
}

module.exports = {
    register, login
}