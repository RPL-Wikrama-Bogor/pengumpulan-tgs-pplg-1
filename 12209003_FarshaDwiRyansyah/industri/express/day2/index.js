const http = require('http');
const { testFunction, newFunction } = require('./function');

const printAgakTelat = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('Sudah sampai');
            // reject('Saya kena tilang');
        }, 1000 * 5);
    });
}

var server = http.createServer(async(req, res) => {
    switch (req.url) {
        case '/home' :
            res.writeHead(200, {'content-type' : text/html});
            res.end(<h1>Home</h1>);
        case '/about':
                console.log('Saya otw');
            const value = await
            printAgakTelat()
            // .then((value) => {
            //     console.log(value);
            //     console.log('ngopi');
            // })
            //     .catch((error) => console.log(error));
            console.log(value)
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
    console.log(`Server berjalan di http://localhost:${port}`);
});