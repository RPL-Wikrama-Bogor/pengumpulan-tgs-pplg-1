const jwt = require('jsonwebtoken');
const { secretAccsesToken } = require('../controller/auth-controller');

const authenticateJWT = (req,res,next) =>{          //next buat 
    const bearerToken = req.headers.authorization
    if(!bearerToken){
     return res.status(403).json({
        massage: 'Unauthoruzed'});
    }
    //mengambil token
    //split akan memecah string menjadi array berdasarkan strip (-) atau tergantung didalam tutup kurung
    const token =bearerToken.split(' ')[1];

    jwt.verify(token,secretAccsesToken,(error,user) =>{
        if(error){
           return res.status(403).json({
                massage: 'Unauthoruzed'});
        }
        next();                             //jika tak ada error maka tokennya valid
    })
}


module.exports= authenticateJWT

