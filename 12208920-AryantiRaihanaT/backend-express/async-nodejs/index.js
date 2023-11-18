// mengimport
const http = require('http');
const { testFunction,  newFunction } = require('./function');
// CommonJS / ESM - Ecmascript

const printAgakTelat = () => {
    // promise punya parameter
    // promise (janji) server akan mengirimkan data
    // kalo berhasil resolve
    // kalo gagal reject
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('Sudah Sampai');
            // reject('Saya kena tilang');
        }, 1000 * 5);
    });
}

var server = http.createServer(async(req, 
res) => {
    // http://localhost:3000/about
     // about
    // versi switch 

    switch (req.url) {
        case '/about' :
            console.log('Saya otw');
            const value = await printAgakTelat();
            console.log(value);
            console.log('Ngopi');
            res.write('switch about')
            res.end();
            break;
        case '/contact':
            res.write('switch contact')
            res.end();
            break;
        default:
            res.write('404 Not Found - switch');
            res.end();
            break;
    }



    // versi if else
    // if (req.url == '/about') {
    //     res.write('ini about');
    //     res.end();
    // }  else if (req.url == '/contact'){
    //     res.write('ini contact');
    //     res.end();
    // }else {
    //     res.write('404 Not Found');
    //     res.end();
    // }
    
});

const port = 3000;
server.listen(port, () => {
    console.log(`Server berjalan di http://localhost:${port}`);
});
