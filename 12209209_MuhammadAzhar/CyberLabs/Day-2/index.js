const http = require('http');
const {testFunction, newFunction} = require('./function');

// promise
const printAgakTelat = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
           resolve('sudah sampai');
        //    reject('saya kena tilang');
        }, 1000 * 5);
    });
}

var server = http.createServer(async(req, res) => {
    switch (req.url) {
        case '/about':
            res.write('ini about');
            console.log('saya otw');

            const value = await
            
            printAgakTelat()
            console.log(value),
            console.log('ngopi')
            console.log(error)
            res.end();
            break;

        case '/contact':
            res.write('ini contact');
            res.end();
            break;
                
        default:
            res.write('404 Not Found');
            res.end();
            break;
    }
});

const port = 3000;
server.listen(port, () => {
    console.log(`Server berjalan di http://localhost:${port}`);
});
