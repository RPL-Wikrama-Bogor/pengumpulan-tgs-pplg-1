// import
const express = require("express");
const bookRouter = require("./router/book-router");
const penulisRouter = require("./router/penulis-router");
const authRouter = require("./router/auth-router");
const autheticateJWT = require("./middleware/jwt-auth-middleware");
// var cors = require('cors');

// const {handler,handlerHome,handlerAbout,handlerContact,handlerNews} = require('./router.js');

//instansiasi
const app = express();
// app.use(cors());

// middleware json parser
app.use(express.json());

//middleware request body
app.use(express.urlencoded({
    extended: true
}));

//book routing with book router
app.use("/book", bookRouter);
app.use("/penulis",autheticateJWT, penulisRouter)
app.use("/auth" , authRouter);

// const siswa = [
//     {
//         id: 1,
//         nama: 'Langga',
//     },
//     {
//         id: 2,
//         nama: 'Duta',
//     },
//     {
//         id: 3,
//         nama: 'wijaya',
//     },  
// ];

// app.post('/test' , (req, res) => {
//     res.send('POST test');
// });
// app.put('/test' , (req, res) => {
//     res.send('PUT test');
// });
// app.delete('/test' , (req, res) => {
//     res.send('DELETE test');
// });
// // app.get('/siswa/:id' , (req, res) => {
// //     const { id, name } = req.params;
// //     res.send(siswa[id].nama);
// // });
// app.get('/siswa/:id' , (req, res) => {
//     const {id} = req.params;
//     const student = siswa.find((student) => student.id === parseInt(id))
//     res.send(student.nama)
// });

// app.get('/contohparam/:username', (req, res) => {


//     //deconstructor
//     // const {username, name, id} = req.params;
//     // res.send(username);
//     const { sort } = req.query;
//     res.send(sort ?? 'desc');
// });

// app.get('/', handler);
// app.get('/home', handlerHome);
// app.get('/about', handlerAbout);
// app.get('/contact', handlerContact);
// app.get('/news', handlerNews);


app.listen(3000, () => {
    console.log(`server berjalan di http://localhost:3000`);
})