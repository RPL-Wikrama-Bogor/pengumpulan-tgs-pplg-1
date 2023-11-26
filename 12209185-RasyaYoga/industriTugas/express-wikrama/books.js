const express = require("express");
const bookRouter = require ('./router/book-router');
const authorRouter = require ('./router/author-router');
const authRouter = require ('./router/auth-router');
// const cors = require('cors');
const authenticateJWT = require('./middleware/jwt-auth-middleware');
// instansiasihconst app = express();
//var cors = require('cors');
const app = express();
//app.use (cors());
app.use(express.json());
app.use(express.urlencoded({
    extended:true
}));

app.use('/book', authenticateJWT, bookRouter);
app.use('/author', authenticateJWT, authorRouter);
app.use('/auth', authRouter);

// app.get('/book', bookController.getBooks);
// app.get('/book/:id', bookController.getBook);
// app.post('/book', bookController.addBook);
// app.put('/book/:id', bookController.editBook);
// app.delete('/book/:id', bookController.deleteBook);




app.listen(4000, () => {
    console.log(`server berjalan di http://localhost:4000`);
});