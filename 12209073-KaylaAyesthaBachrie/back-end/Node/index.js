const http = require('http');
// CommponJS / ESM - Ecmascript
const {testFunction, newFunction} = require('./function');
const { log } = require('console');
// Promise
const printAgakTelat = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('Sudah sampai');
            // reject('Saya kena tilang');
        }, 1000 * 5);  
    });
}
// require = menginport
var server = http.createServer(async(req, res) => {
    // res.write('Saya node.js');
    // res.end();
    // req.url // about
    switch (req.url){
        case '/about':
            console.log('Saya otw');
            // menggunakan async dan await
            const value  = await
                printAgakTelat();
                console.log(value);
                console.log('Ngopi');
            // printAgakTelat().then((value) => {
            //     console.log(value);
            //     console.log('Ngopi');
            // })
            // .catch((error) => console.log(error));
            // testFunction();
            // newFunction('Ini berasal dari parameter');
            res.write('ini about');
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

    // if(req.url == '/about'){
    //     res.write('ini about');
    //     res.end();
    // } else{
    //     res.write('404 Not Found');
    //     res.end();
    // }
});

const port = 3000;
server.listen(port, () => {
    console.log(`Server berjalan di http:://localhost:${port}`);
});