// *Import
const express = require('express');
const bookRouter = require('./router/book-router');
const authorRouter = require('./router/author-router');
const authRouter = require('./router/auth-router');

// *Instansiasi
const app = express();

// *Middleware JSON Parser
app.use(express.json());

// *Middleware Request Body
app.use(
  express.urlencoded({
    extended: true,
  })
);

// *Book Routing with Book Router
app.use('/book', bookRouter);

// *Author Routing with Author Router
app.use('/author', authorRouter);

// *Auth Routing withAuth Router
app.use('/auth', authRouter);

app.listen(3000, () => {
  console.log(`Server berjalan di http://localhost:3000`);
});