const jwt = require('jsonwebtoken');

const authenticateJWT = (req, res, next) => {
    authorization;

    if(!bearerToken) {
        res.status(403).json({ message : 'Unauthorized' });
    }

    const token = bearerToken.split();
};

module.exports = authenticateJWT;