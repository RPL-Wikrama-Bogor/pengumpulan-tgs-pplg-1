const http = require('http');
//COMMON JS / ESM- EcmaScript
const { testFunction, newFunction } = require('./function.js'); //multiple import

// Promise
const printAgakTelat = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('Saya sudah sampai');
            // reject('Ngaret dulu bre');
        }, 1000 * 5);
    });
}

var server = http.createServer(async (req, res) => {
    // res.write('Saya node.js');
    // res.end(); // memberi tahu kepada user bahwa sudar selesai
    // if (req.url == '/about') {
    //     res.write('Ini about');
    //     res.end();
    // }else if (req.url == '/contact') {
    //     res.write('Ini contact');
    //     res.end();
    // }else{
    //     res.write('404 not found');
    //     res.end();
    // }
    switch (req.url) {
        case '/about':
            // testFunction();
            // newFunction('CONSOLE');
            console.log('Saya otw');
            const value = await
            printAgakTelat();
            console.log(value);
            console.log('Ngopi');
            // printAgakTelat().then((value) => { 
            //     console.log(value); 
            //     console.log('Ngopi');
            // }).catch((error) => console.log(error));
            res.write('Ini about');
            res.end();
            break;
        case '/contact':
            res.write('Ini contact');
            res.end();
            break;
        default:
            res.write('404 not found');
            res.end();
            break; 
    }
});

const port = 9000;
server.listen(port, () => {
    console.log(`Server berjalan di http://localhost:${port}`);
});