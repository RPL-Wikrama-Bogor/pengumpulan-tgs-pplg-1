const jwt = require('jsonwebtoken');
const { secretAccessToken } = require('../controllers/auth-controller');
const { user } = require('../config/db-config');

const authenticateJWT = (req, res, next) => {
    const bearerToken = req.headers.authorization;

    if (!bearerToken) {
        res.status(403).json({
            message: 'Unauthorized'
        });
        return;
    };

    // bearer dfghjkl
    const token = bearerToken.split(' ')[1];

    jwt.verify(token, secretAccessToken, (err, user) => {
        if (err) {
            res.status(403).json({
                message: 'Unauthorized'
            });
            return;
        };

        next();
    });
};

module.exports = authenticateJWT;