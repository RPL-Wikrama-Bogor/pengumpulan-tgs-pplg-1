const jwt = require('jsonwebtoken');
const { secretAccessToken } = require('../controllers/auth-controller');
const authenticateJWT = (req, res, next) => {
    const bearerToken = req.headers.authorization;

    if(!bearerToken) {
        return res.status(403).json({ message :
        'Unauthorized'});
    }

    // aryanti-10-rpl-bogor => split('-')
    // hasilnya 
    // ['aryanti', '10', 'rpl', 'bogor']

    // Bearer jsjwdnuwhwdid(as token), jd kita hanya mengambil si token nya saja
    // ['bearer', 'jsjwdnuwhwdid']
    const token = bearerToken.split(' ')[1];

    jwt.verify(token, secretAccessToken, (err, user) => {
        if(err) {
            return res.status(403).json({ message: 'Unauthorized'});
        }

        next();
    });
};

module.exports = authenticateJWT;