const http = require('http');

// promise / fedback
const printAgakTelat = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('Saya Sudah Sampai');
            // reject('Saya kena tilang');
        }, 1000 * 5 );
    });
}

// import
// const testFunction = require('./function'); 

// import lebih dari 1
const {testFunction, newFunction} =  require('./function')
// Common JS / ESM  - Ecmascript

var server = http.createServer(async (req, 
    res) =>{
        // request url 
        // menggunakan switch
        switch (req.url){
            case '/about' :
                console.log('Saya otw');
                // menggunakan async dan await 
                const value =  await
                 printAgakTelat();
                 console.log(value);
                 console.log('ngopi');
                //  menggunakan then 
                // printAgakTelat().then((value) => { 
                //     console.log(value); 
                //     console.log('Ngopi');
                // }).catch((error) => console.log(error));
                // testFunction();
                // newFunction('ini berasal dari parameter');
                res.write('ini about');
                res.end();
                break;
            case '/contact' :
                    res.write('ini contact');
                    res.end();
                    break;
            default :    
                res.write('404 Not Found');
                res.end();
                break;
        }

        // menggunakan if else
        // if(req.url == '/about'){
        //     res.write('ini about');
        //     res.end();
        // }else{
        //     res.write('404 Not Found');
        //     res.end();
        // }

        // res.write('Saya node.js');
        // res.end();
});

const port = 3000;
server.listen(port, () => {
    console.log(`Server berjalan di http:://localhost:${port}`)
});