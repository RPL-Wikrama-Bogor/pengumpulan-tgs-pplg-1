const express = require('express');
const app = express();
const bookRouter = require('./router/book_routes');
const authorRouter = require('./router/author_routes');
const authRouter = require('./router/auth-routes');
const  authenticateJWT = require('./middleware/jwt-auth-middleware');
// const bookController = require('./controllers/book-controller');

// penggunaan cors 
var cors = require('cors');
app.use(cors());

// req berupa json
app.use(express.json());

// req ke url 
app.use(express.urlencoded({ 
    extended:true
}));

// book routing
app.use('/book', authenticateJWT, bookRouter);
app.use('/author', authenticateJWT, authorRouter);
app.use('/auth', authRouter);


app.listen(3000, () =>{
    console.log(`Server berjalan di http://localhost:3000`);
})