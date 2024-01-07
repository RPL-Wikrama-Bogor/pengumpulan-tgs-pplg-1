const jwt = require('jsonwebtoken');
const { secretAccessToken } = require('../controllers/auth-controller');
const authenticateJWT = (req, res, next) => {
    const bearerToken = req.headers.authorization;

    if(!bearerToken){
        return res.status(403).json({ 
            message: 'Unauthorized'
        });
    }
    // Bearer aksdjaksdjasjdkajskdj
    // split = untuk memecah string menjadi suatu karakter
    // contoh : kayla-bachrie-ayestha => split ('-')
    // ['kayla'], ['bachrie'], ['ayestha']
    const token = bearerToken.split(' ')[1];

    jwt.verify(token, secretAccessToken, (err, user) => {
        if(err){
            res.status(403).json({
                message: 'Unauthorized'
            });
        }

        next();
    });
};

module.exports = authenticateJWT;