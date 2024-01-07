const express = require('express');
const cors = require('cors');
const bookRouter = require('./router/book-router')
const writerRouter = require('./router/writer-router');
const writRouter = require('./router/writ-route');
const authenticateJwt = require('./midleware/jwt-writ-midleWare')


const app = express(); 

//midleware json parser
app.use(express.json());

//midleware request body
app.use(express.urlencoded({
    extended: true
}));

//book routing with book router 
app.use('/book', authenticateJwt,bookRouter);
app.use('/writer', authenticateJwt,writerRouter );
app.use('/writ',authenticateJwt, writRouter );

app.listen(4000 , () => {
    console.log('server berjalan di http://localhost:4000');
});

