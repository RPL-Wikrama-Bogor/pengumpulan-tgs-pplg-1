// import
var cors = require('cors');
const express = require('express');
const router = require('./router/book-router');
const authorrouter = require('./router/author-router');
const authrouter = require('./router/auth-router');
const authenticateJWT = require('./middleware/jwt-auth-middleware');
// instansiasi
const app = express();
// middleware json parser
app.use(express.json());
// cors
app.use(cors());
// request body
app.use(express.urlencoded({
    extended: true
}));
// routing
app.use('/book', router, authenticateJWT);
app.use('/author', authorrouter);
app.use('/auth', authrouter);

// HTTP Method: GET, POST, PUT/PATCH, DELETE

app.listen(3000, () => {
    console.log('Server is running in http://localhost:3000');
});
