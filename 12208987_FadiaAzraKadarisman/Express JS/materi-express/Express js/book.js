const express = require('express'); 
const app = express();
const bookRouter = require('./router/book-router.js');
const authorRouter = require('./router/penulis-router.js');
const authRouter = require('./router/auth-router.js');
const authenticateJWT = require('./middleware/jwt-auth-middleware.js')

// middleware yang di proses ketika request dikirim dan sebelum respon diterima
// middleware JSON Parser
app.use(express.json()); // membaca data yang dikirim ke dalam format json
// middleware request body
app.use(express.urlencoded({ //membaca data yang dikirim ke dalam url
    extended: true
}));

// book routing with book router
app.use('/book', authenticateJWT, bookRouter);
app.use('/author', authenticateJWT, authorRouter);
app.use('/auth', authenticateJWT, authRouter);

app.listen(3000, () => {
    console.log(`Server berjalan di http://localhost:3000`);
});