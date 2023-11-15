// mulai server menggunakan express

// import
// const express = require('express');

// Instansiasi
// const app = express();

// const {handler, handleHome, handleAbout, handleContact, handleNews} =  require('./router.js')

// HTTP Method: GET, POST, PUT/PATCH, DELETE

// parameter => menampilkan / mengakses semua params
// app.get('/contohparam/:username/:name/:id', (req, res) => {
//     res.send(req.params);
// });

// kalo hanya ingin menampilkan 1 parameter
// app.get('/contohparam/:username/:name/:id', (req, res) => {
//     const username = req.params.username;
//     const name = req.params.username;
//     const id = req.params.username;
//     res.send(req.params.username);



// });

// // parameter menggunakan Deconstructor 
// app.get('/contohparam/:username/:name/:id', (req, res) => {

//     const { username, name, id } = req.params;
//     res.send(username);



// })

// //  parameter menggunakan Query 
// app.get('/contohparam/:username', (req, res) => {
//     const {sort} = req.query;
//     res.send(req.query.sort ?? 'desc');


// });

// array parameter

// const siswa = [
//     {
//         id: 1,
//         name: 'Asty',
//     },
//     {
//         id: 2,
//         name: 'Nandang',
//     },
//     {
//         id: 3,
//         name: 'Samsul',
//     }
// ];

// app.post('/test', (req, res) => {
//     res.send('POST Test');
// });
// app.put('/test', (req, res) => {
//     res.send('PUT Test');
// });
// app.delete('/test', (req, res) => {
//     res.send('DELETE Test');
// });

// app.get('/siswa/:id', (req, res) => {
//     // id
//     const {id} = req.params;
//     const student = siswa.find((student) =>
//      student.id === parseInt(id))
//      res.send(student.name)

// });


// // Root
// app.get('/', handler);
// app.get('/home', handleHome);
// app.get('/about', handleAbout);
// app.get('/contact', handleContact);
// app.get('/news', handleNews);

// jika dikirim dengan send maka akan dirender sebagai html 

// app.listen(3000, () => {
//     console.log(`Server berjalan di http://localhost:3000`);
// });