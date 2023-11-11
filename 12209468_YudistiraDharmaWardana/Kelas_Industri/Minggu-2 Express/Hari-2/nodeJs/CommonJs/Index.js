const http = require('http');
const {testFunction, newFunction } = require('./function');
const { resolve } = require('path');

const printAgakTelat = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('Saya kena tilang');
        }, 1000 * 5);
    });
}

var server = http.createServer((req, res) => {
    
    switch (req.url) {
        case '/about':
            console.log('saya otw');
            printAgakTelat() .then((value) => {
                console.log(value);
                console.log('ngopi');
            })
                .catch((error) => console.log(error));
            console.log('ngopi');
            res.write('ini about')
            res.end();
            break;
        case '/contact':
            res.write('ini contact')
            res.end();
            break;
        case '/portofolio':
            res.write('ini portofolio')
            res.end();
            break;
        default:
            res.write('404 not found')
            res.end();
            break;
    }

    });

    const port = 3000;
    server.listen(port, () => {
        console.log(`Server berjalan di http://localhost:${port}`)
});