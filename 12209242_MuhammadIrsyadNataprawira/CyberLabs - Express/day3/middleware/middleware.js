const middleware = (req, res, next) => {
    if ( req.query.token == 'qwertyuiop') {
        next();
    } else {
        res.send('Dilarang masuk')
        console.log('Invalid token');
    }
}

module.exports = middleware