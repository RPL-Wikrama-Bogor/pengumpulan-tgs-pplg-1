const express = require('express'); // import
const app = express(); // instansiasi
const { handler, handleContact, handleHome, handleAbout, handleBlog } = require('./router.js');
// HTTP Method: GET, POST, PUT/PACTH = edit , DELETE

// URL Root
// menggunakan parameter
app.get('/contohparam/:username/:test/:id', (req, res) => { // Parameter
    // const username = res.send(req.params.username); // mengakses param 1 per 1
    // const test = res.send(req.params.test); 

    // atau bisa gunakan deconstructor
    const {username, test, id} = req.params;
    res.send(username);
});

// menggunakan query
app.get('/contohquery/:username', (req, res) => {
    const { sort }= req.query;
    res.send(sort);
});

// array parameter
const siswa = [
    {
        id: 1,
        nama: 'Asty'
    },
    {
        id: 2,
        nama: 'Ayes'
    },
    {
        id: 3,
        nama: 'Fadia'
    }
];

app.post('/test', (req, res) => { // post = mengirim data
    res.send('Post test');
});
app.put('/test', (req, res) => { // put = mengedit data
    res.send('Put test');
});
app.delete('/test', (req, res) => { // delete = menghapus data
    res.send('Delete test');
});

app.get('/siswa/:id', (req, res) => {
    const { id } = req.params;
    const student = siswa.find((student) => 
    student.id === parseInt(id)); // id yang di input adalah string, lalu menggunakan parseInt untuk mengubah menjadi angka(int) 
    res.send(student.nama);
    // res.send(siswa[id].nama);
});

app.get('/', handler);
app.get('/contact', handleContact);
app.get('/home', handleHome);
app.get('/about', handleAbout);
app.get('/blog', handleBlog);

app.listen(3000, () => {
    console.log(`Server berjalan di http://localhost:3000`);
});