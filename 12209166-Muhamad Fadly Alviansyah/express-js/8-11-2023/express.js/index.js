// *Import
const express = require('express');
const bookController = require('./controllers/book-controller');
// const {handleHome, handleAbout, handleContact, handleNews} = require('./router');

// *Instansiasi
const app = express();

// *Middleware JSON Parser
app.use(express.json());

// *Middleware Request Body
app.use(
  express.urlencoded({
    extended: true,
  })
);
app.post('/', (req, res) => res.send('Test'));
// *HTTP Method: GET, POST, PUT/PATCH, DELETE
app.get('/book', bookController.getBooks);
app.get('/book/:id', bookController.getBook);
app.post('/book', bookController.addBook);
app.put('/book/:id');
app.delete('/book/:id');

app.listen(3000, () => {
  console.log(`Server berjalan di http://localhost:3000`);
});

// *URL Root
// const siswa = [
//   {
//     id: 1,
//     nama: 'Ivan',
//   },
//   {
//     id: 2,
//     nama: 'Barnes',
//   },
//   {
//     id: 3,
//     nama: 'Fakhri',
//   },
// ];

// app.post('/test', (req, res) => {
//   res.send('POST test');
// });
// app.put('/test', (req, res) => {
//   res.send('PUT test');
// });
// app.delete('/test', (req, res) => {
//   res.send('DELETE test');
// });

// app.get('/siswa/:id', (req, res) => {
//   const { id } = req.params;
//   const cariSiswa = siswa.find(siswa => siswa.id === parseInt(id));

//   if (cariSiswa) {
//     res.send(cariSiswa.nama);
//   } else {
//     res.send('Siswa tidak ditemukan');
//   }
// });

// app.get('/contohparam/:username', (req, res) => {
  // Deconstructor
  // const {username, id} = req.params;
  // res.send(username);
//   const { sort } = req.query;
  
//   res.send(sort ?? 'desc');
// });

// app.get('/', handleHome );
// app.get('/home', handleHome);
// app.get('/about', handleAbout);
// app.get('/contact', handleContact);
// app.get('/news', handleNews);
