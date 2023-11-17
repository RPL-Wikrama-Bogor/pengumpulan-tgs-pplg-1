const handler = (req, res) => {
    if ( req.path == '/home' ) {
        res.send('This is home page');
    } else if ( req.path == '/about' ) {
        res.send('This is about page');
    } else if ( req.path == '/contact' ) {
        res.send('This is contact page');
    } else {
        res.send('404 Not Found');
    }
}

module.exports = handler;