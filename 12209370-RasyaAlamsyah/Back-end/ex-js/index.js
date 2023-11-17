// Import
const express = require('express');

const bookRouter = require('./router/book-router');
const authRouter = require('./router/auth-router');
const penulisRouter = require('./router/penulis-router');
const authenticateJWT = require('./middleware/jwt-auth-middleware')

const app = express();


app.use(express.json());


app.use(express.urlencoded({
    extended: true 
}));

app.use('/book', authenticateJWT, bookRouter );
app.use('/auth', authRouter);
app.use('/auth', penulisRouter);

// // HTTP Method: GET, POST, PUT/PATCH, DELETE


// // Url Root
// // app get('/',);

// // localhost:3000/contohparam/han?sort=asc

// const siswa = [
//     {
//         id: 1,
//         nama: 'Khai',
//     },
//     {
//         id: 2,
//         nama: 'Barnes',
//     },
//     {
//         id: 3,
//         nama: 'Fakhri'
//     },
// ];

// app.post('/test', (req, res) => {
//     res.send('POST test nodemon');
// });
// app.put('/test', (req, res) => {
//     res.send('PUT test');
// });
// app.delete('/test', (req, res) => {
//     res.send('DELETE test');
// });

// app.get('/siswa/:id', (req, res) => {
//     const { id } = req.params;
//     const student = siswa.find((student) => 
//     student.id == parseInt(id));
//     res.send(student.nama);
// });


// app.get('/contohparam/:username', (req, res) => {
//     // Deconstructor
//     // const {username, test, id} = req.params;
//     // res.send(username);
//     const { sort } = req.query;

//     res.send(sort ?? 'desc');
// });

// app.get('/', handle);
// app.get('/home', Home );
// app.get('/about', About );
// app.get('/contact', Contact );
// app.get('/news', News );



app.listen(3000, () => {
    console.log(`Server berjalan di http://localhost:3000`);
})