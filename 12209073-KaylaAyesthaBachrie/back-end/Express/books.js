const express = require('express');
const app = express();
// const { addBook } = require('./controllers/bookController');
const bookRouter = require('./router/book-router');
const authorRouter = require('./router/author-router');
const authRouter = require('./router/auth-router');
const authenticateJWT = require('./middleware/jwt-auth-middleware');

// middleware JSON Parser = POST/PUT/PATCH berupa json
app.use(express.json());

// Middleware request body = GET/DELETE masuk kedalam url (array atau string yang masuk ke dalam url)
app.use(express.urlencoded({
    extended: true
}));

// book routing with book router
app.use('/book', authenticateJWT, bookRouter);
app.use('/author', authenticateJWT, authorRouter);
app.use('/auth', authRouter);

// app.get('/book', bookController.getBooks);
// app.get('/book/:id', bookController.getBook);
// app.post('/book', bookController.addBook);
// app.put('/book/:id', bookController.editBook);
// app.delete('/book/:id', bookController.deleteBook);

app.listen(3000, () => {
    console.log(`Server berjalan di http://localhost:3000`);
})