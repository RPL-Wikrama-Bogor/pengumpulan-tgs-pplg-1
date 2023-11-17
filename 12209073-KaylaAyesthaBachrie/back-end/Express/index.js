// import
// const express = require('express');

// instansiasi
// const app = express();

// HTTP Method: GET, POST, PUT/PATCH, DELETE

// URL root
// app.get('/', (req, res) => {
//     res.send('<h1>Welcome to Express</h1>');
// });

// const {handler, handleHome, handleAbout, handleContact, handleNews} = require('./router.js');

// // localhost:3000/contohparam/han?sort=asc
// // penggunaan array parameter

// const students = [
//     {
//         id: 1, 
//         name: 'Ayestha',
//     },
//     {
//         id: 2, 
//         name: 'Dimas',
//     },
//     {
//         id: 3, 
//         name: 'Chanyeol',
//     },
// ];

// // untuk menyambungkan ke postman
// // post = mengirimkan data
// app.post('/test', (req, res) => {
//     res.send('POST test');
// });
// // put = mengedit data
// app.put('/test', (req, res) => {
//     res.send('PUT test');
// });
// // delete = menghapus data
// app.delete('/test', (req, res) => {
//     res.send('DELETE test');
// });

// app.get('/student/:id', (req, res) => {
//     const { id } = req.params;
//     // res.send(students[id].name);
//     const student = students.find((student) =>
//         student.id == parseInt(id) )
//     res.send(student.name)
// })

// // app.get('/contohparam/:username/:name/:id', (req, res) => {
// app.get('/contohparam/:username', (req, res) => {
//     // res.send(req.params.username);
//     // jika ingin menampilkan paramnya satu persatu
//     // const username = req.params.username;
//     // const name = req.params.name;
//     // const id = req.params.id;

//     // Deconstructor
//     // const {username, id} = req.params;
//     // res.send(username);

//     //QUERY
//     const { sort } = req.query;
//     res.send(sort ?? 'ayestha');
//     // res.send(req.query.sort ?? 'gwequ');

// });

// app.get('/', handler);
// app.get('/home', handleHome);
// app.get('/about', handleAbout);
// app.get('/contact', handleContact);
// app.get('/news', handleNews);


// const handler = (ewq, res) => {
//     res.send(<h1>Welcome to express</h1>)
// }

// app.listen(3000, () => {
//     console.log(`Server berjalan di http://localhost:3000`);
// })