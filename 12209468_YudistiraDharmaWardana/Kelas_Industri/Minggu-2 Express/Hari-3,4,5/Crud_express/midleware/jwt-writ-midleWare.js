const jwt = require('jsonwebtoken');
const { secretAcsessToken } = require('../controller/writ-controller');

const authenticateJwt = (req , res, next) =>{
    const bearerToken =  req.headers.authorization;

    if(!bearerToken){
        console.log('imt')
        return res.status(403).json({Message : 'Unauthorized'});
    }

    //farham-10-rpl-bandung split('-') //awal
    //['farhan', '10', 'rpl', 'bandung'] //setelah menggunakan split -

    const token = bearerToken.split(' ')[1];

    jwt.verify(token , secretAcsessToken, (err, user) =>{
        if (err){
            console.log(err);
            return res.status(403).json({
                Message: 'Unauthorized'
            });
        }
        next();
    });
}

module.exports = authenticateJwt