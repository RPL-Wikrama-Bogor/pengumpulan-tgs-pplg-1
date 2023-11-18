 //import
// const express = require('express');
// const {handleHome, handleAbout, handleContact, handleNews} = require('./router');

//instansiasi express
// const app = express();

// HTTP Method: 
// GET : mengambil data
// POST : mengirim data dr klien ke server , bisa bikin data baru
// PUT/PATCH : spesifiknya untuk mengedit data
// DELETE

// ------------------------------------------------------------------------

//jika klien mengakses path dgn get maka ini akan dieksekusi

// app.get('/', (req, res) => {
//     // kalo send, itu bakal dikirim sebagai html
//     res.send('<h1>Welcome to Express</h1>');
// })

// ------------------------------------------------------------------------
// contoh penggunaan parameter 


// query
// http://localhost:3000/contohparam/ar?sort=asc
// sort itu key nya
// asc itu valuenya

// contoh penggunaan parameter

// const siswa = [
//    {
//       id: 1,
//       nama: 'Ivan',
//    },
//    {
//       id: 2,
//       nama: 'Barnes',
//    },
//    {
//       id: 3,
//       nama: 'Fakhri'
//    },
// ];

// app.post('/test', (req, res) => {
//    res.send('POST test nodemon');
// });
// app.put('/test', (req, res) => {
//    res.send('PUT test');
// });
// app.delete('/test', (req, res) => {
//    res.send('DELETE test');
// });

// memanggil siswa berdasarkan id yang ditentukan
// parseInt() untuk mengubah id yang tadinya '1' menjadi 1
// app.get('/siswa/:id', (req, res) => {
//    const { id } = req.params;

//    const student = siswa.find((student) => 
//    student.id == parseInt(id))

//    res.send(student.nama)
// });

// app.get('/contohparam/:username', (req, res) => {
   // const username = req.params.username;
   // const test = req.params.test;
   // const id = req.params.id;

   // Deconstructor

   // const {username, test, id} = req.params;
   // res.send(req.params);

   //memanggil query
   // res.send(req.query);
   
   // Deconstruc Query
   // const { sort } = req.query;

   // res.send(req.query.sort ?? 'desc');
// });

// routing halaman
// app.get('/');
// app.get('/home', handleHome);
// app.get('/about', handleAbout);
// app.get('/contact', handleContact);
// app.get('/news', handleNews);

//menjalankan server, app diikat ke port 3000
// app.listen(3000, () => {
//    console.log(`Server berjalan di http://localhost:3000`)
// });