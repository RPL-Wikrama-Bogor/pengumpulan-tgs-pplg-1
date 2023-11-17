const jwt = require('jsonwebtoken');
const { secretAccessToken } = require('../controller/auth-controller');

const authenticateJWT = (req, res, next) => {
    const bearerToken = req.headers.authorization;

    if (!bearerToken) {
        return  res.status(403).json({ message : 'Unauthorized' });
    }

        //bearer kskkksksskksksksks
        //fungsi split mecah per karakter
        //farhan-10-rpl-bandung => ('-')
        // ['farhan', 10, 'rpl', 'bandung']
        //kalau yang bawah jadi 
        //['bearer', 'skskkskskskskks'] yang kepanggil yang 'skkskks' karena array ke 1
        const token = bearerToken.split(' ')[1];

        jwt.verify(token, secretAccessToken, (err, user) => {
            if (err) {
                return res.status(403).json({ message : 'Unauthorized'});
            }

            next();
        });
};

module.exports = authenticateJWT;