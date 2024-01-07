const http = require('http');
const { newFunction, testFunction } = require('./function')

//promise
const printAgakTelat = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('sudah sampai');
        }, 1000 * 5)
    });   
}

var server = http.createServer( async (req, res) => {


    switch (req.url) {
        case '/about':
            console.log('saya otw');
            const value = await 
            printAgakTelat();
            console.log(value);
            console.log('ngopi');
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
    // if (req.url == '/about') {
    //     res.write('ini about');
    //     res.end();
    // } else {
    //     res.write('BUT I CURUMBLE COMPETLY WHEN YOU CRY');
    //     res.end();
    // }
});

const port =3000;
server.listen(port, () =>{
    console.log(`server berjalan di http:/localhost:${port}`); 
});