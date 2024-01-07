//import
const express = require('express');
const {handleHome}= require('./handler');
const {handleAbout}= require('./handler');
const {handleContact}= require('./handler');
const {handlePhone}= require('./handler');
const {handleService}= require('./handler');
const {handleSlace}= require('./handler');

//instansiasi
const app = express(); 

// HTTP method: GET, POST , PUT/FETCH,DELETE

//ROOT
console.log('----------------------hari - 3----------------------------')
const siswa = [
    {
        id: 1,
        nama: 'saiful',
    },
    {
        id: 2,
        nama: 'anwar',
    },
    {
        id: 1,
        nama: 'faisal',
    },
];

app.get('/siswa/:id',(req, res) => {
    const {id} = req.params;
    const student = siswa.find((student)=> 
    student.id == parseInt(id))

    res.send(student.nama)
});


app.get('/contohParam/:username/:test/:id', ((req, res) =>{
    // res.send(req.params.farhan);
    // const Data{username, id , test} = req.params;
    // res.end(Data);
    // res.send(req.query.sort ?? 'desc');
    // const {sort} = req.query;
    // res.send(sort ?? 'desc');
}));

app.post('/test', (req, res) => {
    res.send('POST test');
});
app.put('/test', (req, res) => {
    res.send('PUT test');
});
app.delete('/test', (req, res) => {
    res.send('DELETE test');
});

console.log('----------------------hari - 3----------------------------')

app.get('/', handleSlace);
app.get('/home', handleHome);
app.get('/about', handleService);
app.get('/service', handleAbout);
app.get('/phone', handlePhone);
app.get('/contact', handleContact);



app.listen(4000 , () => {
    console.log('server berjalan di http://localhost:4000');
});