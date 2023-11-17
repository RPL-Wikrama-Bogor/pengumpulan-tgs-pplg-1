const http = require('http');
const { testFunction, newFunction } = require('./function');

// promise

const printAgakTelat = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('Sudah sampai')
            // reject('Saya kena tilang');
        }, 1000 * 5);
    });

}

var server = http.createServer( async (req, res) => {


    switch (req.url){
        case '/about' :
            console.log('Saya otw');

            const value = await printAgakTelat()
            console.log(value);


                // .then((value) => { //ini menangkap resolve ketika program berhasil berjalan
                //         console.log(value);
                //         console.log('Ngopi')
                // })              //ini menangkap reject ketika terjadi kesalahn
                // .catch((error) => 
                // console.log(error))

            // testFunction();
            console.log('Ngopi')
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
    // if(req.url == '/about') {
    //     res.write('ini about');
    //     res.end();
    // }else if(req.url == '/contact'){
    //     res.write('ini contact')
    //     res.end();
    // }else{
    //     res.write('404 Not Found');
    //     res.end();
    // }
});

const port = 3000;
server.listen(port, () => {

    
    console.log(`Server berjalan di http://localhost:${port}`);

});