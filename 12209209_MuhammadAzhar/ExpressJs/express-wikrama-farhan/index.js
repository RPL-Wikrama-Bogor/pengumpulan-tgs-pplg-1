
//Import
var cors = require('cors');
const bookRouter = require('./router/book-router');
const dataRouter = require('./router/data-router');
const authRouter = require('./router/auth-router');
const authenticateJWT = require('./middleware/jwt-auth-middleware');
const express = require('express');

//instansiasi
const app = express();

// Middleware JSON Parser
app.use(cors());

app.use(express.json());

// Middleware request body
app.use(express.urlencoded({
    extended: true
}));

//HTTP Method : GET, POST, PUT/PATCH, DELETE
// PUT UNTUK EDIT DATA

// localhost:3000/contohparam/han?sort=asc

// const siswa = [
//     {
//         id: 1,
//         nama: 'Daffi',
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
//     res.send('POST test nodemon');
// });
// app.put('/test' ,(req, res) => {
//     res.send('POST test');
// });
// app.delete('/test' ,(req, res) => {
//     res.send('DELETE test');
// });

// app.get('/siswa/:id', (req, res) => {
//     const { id } = req.params;
//     const student = siswa.find((student) => 
//     student.id == parseInt(id))
//     res.send(student.nama)
// });

// app.get('/contohparam/:username' , (req, res) => {
//     // const username = req.params.username:
//     // const test = req.params.test:
//     // const id = req.params.id:

//     // Deconstructor

//     // const {username, id} = req.params;
//     // res.send(username);

//     res.send(req.query.sort ?? 'desc');
// });

//book routing with book router

app.use('/book', authenticateJWT, bookRouter);
app.use('/data', dataRouter);
app.use('/auth', authRouter);

app.listen(3000, () => {
    console.log('Server berjalan di http://localhost:3000');
}); 