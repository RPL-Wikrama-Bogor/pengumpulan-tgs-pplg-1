//pertama kita harus import http server
const { error } = require('console');
const http = require('http'); //disini require itu untuk mengimport http
                //mengimport dari file function.js
                //promise
                const printAgakTelat =()=>{
                    return new Promise((resolve, reject) =>{
                         setTimeout(()=>{
                    resolve('sudah sampai');
                    // reject ('sayakena tilang');
                    }, 1000 * 5);  
                    });
                 
                }
                
                                   //req dan res itu data yang dikirim oleh server
var server =http.createServer((req, res) =>{//untuk menginstalasi server, req dan res itu variable yang bisa ditangkap oleh CreateServer
   //http://localhost:3000/about
   // /about
   switch(req.url){     //req.url menyambungkan / page ke code
    case '/about':  
   
    res.write('ini about');
    res.end;
    break;
    case '/contact':
        
        printAgakTelat()
        .then((value) =>{
            console.log(value);  
            console.log('ahhoi');
   })
            .catch((error)=>
            console.log(error))
    
        res.write('ini kontak');
        res.end;
        break;
        case '/home':
    res.write('ini home');
    res.end;
    break;
    default:
    res.write('404 Not Found');
    res.end;
    break
   }
    // if( req.url == '/about'){
    //     res.write('ini about');
    //     res.end;
    // }else if(req.url == '/contact'){
    //     res.write('ino contact');
    //     res.end()
    // }
    // else{
    //     res.write('not found');
    //     res.end();
    // }
}) 
const port =3000;   //menghubungkan ke port
server.listen(port,()=>{ //memasukan port ke server
    console.log(`server jalan di http://localhost:${port}`) //jika server tidak eror dan berjalan maka console.log akan muncul
}) 


//untuk men import kita bisa pakai Common JS(bawaan js) | ESM Ecmascript