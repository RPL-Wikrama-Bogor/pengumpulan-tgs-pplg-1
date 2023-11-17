const dbConfig = require('../config/db-config');    //import code dari file config
const mysql =require ('mysql2');  
const jwt =require('jsonwebtoken');
// const { Connection } = require('mysql2/typings/mysql/lib/Connection');
const pool =mysql.createPool                        //untuk
(dbConfig); 

pool.on('error', (error) =>{                        //untuk jaga jaga jika terjadi error
    console.log(error)
})

const secretAccsesToken = 'dalang munir adalah...'

const register =(req,res)=>{
const email = req.body.email;
const password = req.body.password;

//422 itu mengirim ke data bahwa data tak bisa diolah
if(email == null || password ==null){
    sendFailResponse(res,422,'Email atau password tidak boleh kosong');
    return
}
const data ={
    email:email,
    password:password,
}
const query = 'INSERT INTO users SET ?';

pool.getConnection((error,connection) =>{
    if(error) throw error;
connection.query(query,[data],(error,results) => 
{
if(error) throw error;

if(results.affectedRows >= 1){
    const user = {
        email
    }
    const token = jwt.sign(user, secretAccsesToken);           // pilot yang ada didata
    //Berhasil
    sendAuthResponse(res,token,user)
}   
//GAGAL
sendFailResponse(res,500,'Failed when creating user');
})

    })
}
const login =(req,res)=>{
    const email = req.body.email
    const password = req.body.password

    if(!email || !password){                                                    //validasi login, kalau dia null dia bakalan false dan menjalakan condition email.pw harus diisii
        sendFailResponse(res,422,'Email/Password wajib diisi')
        return;
    }
    const query =`SELECT * FROM users WHERE email = ? AND password = ? ;`; //mengambil data
    
    pool.getConnection((error,connection)=> {
        if(error) throw error;
    
        connection.query(query,[email,password],(error,results) =>{
            if(error) throw error;

            if(results.length >= 1){
                const user = results.pop()                  //pop() = mengambil data paling pertama(users) alurnya kaya ngambil makanan orang

    
                const token = jwt.sign (
                    {email : user.email },
                    secretAccsesToken 
                )
                sendAuthResponse(res,token,'Login sukses',{
                    email:user.email
                })
                return;
            }
            sendFailResponse(res,404,'Email/Password salah')
            return;
        })
        connection.release()
    })
}
const sendAuthResponse =(res,token,massage,user)=> res.status(200).json({
    success:true,
    token:token,
    massage:massage,
    user:user
})
const sendFailResponse =(res,massage)=> res.status(400).json({
    success:false,
    massage:massage,
})




module.exports ={
    register,login,secretAccsesToken    
}