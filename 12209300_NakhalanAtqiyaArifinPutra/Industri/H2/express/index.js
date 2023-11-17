//import
const express = require('express');
const { handlerAbout, handlerContact, handlerNews, handlerHome } = require('./router');

//instansiasi
const app = express();

//HTTP Method: GET, POST, PUT/PATCH,DELETE

// url root

const handler =  require('./router') //mengambil function dari router.js

//mengambil function function dari router
app.get('/', handler.beranda);
app.get('/about', handler.About);
app.get('/contact', handler.Contact);
app.get('/news', handler.News);
app.get('/home', handler.Home);

//menjalankan
app.listen(4000,() =>{
    console.log('Sever berhasil dijalankan di http://localhost:4000')
})