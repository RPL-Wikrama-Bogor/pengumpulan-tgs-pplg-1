//import
const express = require('express');
const bookRouter = require('./router/book-router');
const penulisRouter = require('./router/penulis-router');
const authRouter = require('./router/auth-router');
const authenticateJWT = require('./middleware/jwt-auth-middleware');
const cors = require('cors');
//instansiasi
const app = express();

app.use(cors());
// middleware json parser
app.use(express.json());

// middleware request body
app.use(express.urlencoded({
    extends: true,
}));

// boom routing with book router
app.use('/book', authenticateJWT, bookRouter);
app.use('/penulis', penulisRouter);
app.use('/auth', authRouter);

// HTTP Method: GET, POST, PUT/PATCH, DELETE
// app.get('/book', bookController.getBooks);
// app.get('/book/:id', bookController.getBook);
// app.post('/book', bookController.addBook);
// app.put('/book/:id', bookController.editBook);
// app.delete('/book/:id', bookController.deleteBook);

app.listen(4000, () => {
    console.log(`server berjalan di http://localhost:4000`);
});
















// const { handlerHome, handlerAbout, handlerContact, handlerNews} = require('./router');

// URL root
// app.get('/', (req, res) => {
//     res.send('<h1>Welcome to express</h1>');
// });

// const siswa = [
//     {
//         id: 1,
//         nama: 'Ivan',
//     },
//     {
//         id: 2,
//         nama: 'Barnes',
//     },
//     {
//         id: 3,
//         nama: 'Fakhri',
//     },
// ];

// app.post('/test', (req, res) => {
//     res.send('POST test');
//  });
//  app.put('/test', (req, res) => {
//     res.send('PUT test');
//  });
//  app.delete('/test', (req, res) => {
//     res.send('DELETE test');
//  });

// app.get('/siswa/:id', (req, res) => {
//     const { id } = req.params;

//     const student = siswa.find((student) => student.id === parseInt(id))

//     res.send(student.nama)
// });

// app.get('/contohparam/:username', (req, res) => {
    // const username = req.params.username;
    // const name = req.params.name;
    // const id = req.params.id;

    // Deconstructor
    // const {username, id} = req.params;
    // res.send(username);

//     const { sort } = req.query;

//     res.send(sort ?? 'desc');

// });

// app.get('/home', handlerHome );
// app.get('/about', handlerAbout );
// app.get('/contact', handlerContact );
// app.get('/news', handlerNews );