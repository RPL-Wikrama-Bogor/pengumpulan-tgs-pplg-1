// Import
const express = require('express');
const bookRouter = require('./router/book-router');
const authorRouter = require('./router/author-router');
const authRouter = require('./router/auth-router');
// const cors = require('cors');
const authenticateJWT = require('./middleware/jwt-auth-middleware');

//dipindahin ke book-router
// const bookController = require('./controllers/book-controller');

//Instansiasi
const app = express();

// Middleware JSON Parser
app.use(express.json());

// Middleware req body
app.use(express.urlencoded({
    extended: true
}));

// book routing with book router
app.use('/book', authenticateJWT, bookRouter);

app.use('/author', authorRouter);

app.use('/auth', authRouter);

//dipindahin ke book-router
//HTTP Method : GET, POST, PUT/PATCH, DELETE
// app.get('/book', bookController.getBooks);
// app.get('/book/:id', bookController.getBook);
// app.post('/book', bookController.addBook);
// app.put('/book/:id',  bookController.editBook);
// app.delete('/book/:id', bookController.deleteBook);


app.listen(3000, () => {
    console.log(`Server berjalan di http://localhost:3000`)
 });