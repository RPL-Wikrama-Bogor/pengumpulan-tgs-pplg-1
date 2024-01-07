//import
const express = require('express'); //require itu kaya nge import data/ manggil suatu paackage yang ada di folder kita
const bookRouter = require('./router/book-router');
const authorRouter = require('./router/author-router');
const authRouter = require('./router/auth-router');
const authenticateJWT = require('./middlleware/jwt-auth-middleware');


//instalasi
const app = express();

//middleware JSON parser, yang di request ke user adalah json
app.use(express.json());

//book routing request body, ini ngarahnya ke url yang cuman nerima string sama array aaja
app.use(express.urlencoded({
    extended: true
}));

//book routing with book router
app.use('/book', authenticateJWT ,bookRouter);
app.use('/author', authorRouter);
app.use('/auth', authRouter);

//middleware request body
app.use(express.urlencoded({
    extended: true
}));

//HTTP Method: GET(untuk mendapatkan data),POST(ngirim data) , PATCH/PUT(untuk ngedit ngepost tapi ada datanya untuk ke server dan lebih spesifik), DELETE


app.listen(3000, () => {
    console.log(`server berjalan di http://localhost:3000`);
});
//URL root
// app.get('/', (req, res) => {
//     res.send('Welcome to express');
// });

// const siswa = [
//     {
//         id: 1, 
//         nama: 'ivan',
//     },
//     {
//         id: 2, 
//         nama: 'Barnes',
//     },
//     {
//         id: 1, 
//         nama: 'Fakhri',
//     },
    
// ];

// app.post('/test', (req, res) => {
//     res.send('PUT test');
// });
// app.post('/test', (req, res) => {
//     res.send('POST test nodemon');
// });
// app.post('/test', (req, res) => {
//     res.send('DELETE test');
// });


// app.get('/siswa/:id', (req, res) => {
//     const { id } = req.params;
//     const student = siswa.find((student) => 
//     student.id == parseInt(id) )

//     res.send(student.nama)
// });
// app.get('/contohparam', (req, res) => {
//     //const username = req.params.username; (kalau mau manggil satu satu)
//         //const id = req.params.id; (kalau mau manggil satu satu)
//     //const test= req.params.test; (kalau mau manggil satu satu)

//     //Deconstructor (ini lebih singkatnya)
//     // const {username, id} = req.params;
//     // res.send(req.params.username);
//      const { sort } = req.query;
//     res.send(req.query.sort ?? 'desc');
//     //kalau mau cek yang query (http://localhost:3000/contohparam?sort=asc)
// });


// app.get('/')
// app.get('/Home', handleHome);
// app.get('/Contact', handleContact);

