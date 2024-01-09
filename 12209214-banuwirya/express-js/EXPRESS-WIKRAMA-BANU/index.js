//import
const express = require('express');
const bookRouter = require('./router/book-router');
const authRouter = require('./router/auth-router')
const authRouter = require('./router/auth-router')
// const {handler, handleHome, handleContact, handleAbout, handleNews} = require('./router');

// //instansiasi
const app =  express();

// Middleware JSON Parser
app.use(express.json());

// Middleware request body
app.use(express.urlencoded({
    extended: true
}));

app.use('/auth', AuthRouter);
app.use('/book', bookRouter);
app.use('/auth', authRouter);

app.listen(300, () => {
    console.log("Server berjalan pada http://localhost:3000");
})

 
































//HTTP Method: GET, POST, PUT/PATCH, DELETE

// const siswa = [
//     {
//         id: 1,
//         nama: 'Japar',
//     },
//     {
//         id: 2,
//         nama: 'Yuli',
//     },
//     {
//         id: 3,
//         nama: 'Ricky',
//     },
// ];

// app.post('/test', (req, res) => {
//     res.send('POST test');
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
//     student.id == parseInt(id))
    
//     res.send(student.nama);
// });


// //localhost:3000/contohparam/han?sort=asc?
// app.get('/contohparam/:username', (req, res) => {

//     //deconstructor

//     // const {username}= req.params;

//     const {sort} = req.query;
//     res.send(sort ?? 'desc');
// });

// //Url Root
// app.get('/', handler);
// app.get('/home', handleHome);
// app.get('/about', handleAbout);
// app.get('/contact', handleContact);
// app.get('/news', handleNews)