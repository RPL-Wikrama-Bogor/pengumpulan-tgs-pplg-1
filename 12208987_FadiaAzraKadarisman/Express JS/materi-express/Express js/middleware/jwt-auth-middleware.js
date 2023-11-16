const jwt = require('jsonwebtoken');
const { secretAccessToken } = require('../controllers/auth-controller');

const authenticateJWT = (req, res, next) => {
    const bearerToken = req.headers.authorization;

    if (!bearerToken) {
        // 403 dipakai ketika user mencoba untuk mengakses api tanpa izin / login
        res.status(403).json({
            message: 'Unauthorized'
        });
    }
    
    //split memecah string menjadi suatu karakter array
    //contoh: Bearer klasfkslkj => split()
    // menjadi ['bearer', 'adhjga']
    const token = bearerToken.split(' ')[1];

    jwt.verify(token, secretAccessToken, (err, user) => {
        if (err) {
            return res.status(403).json({message: 'Unauthorized'});
        }

        next();
    });
};

module.exports = authenticateJWT;