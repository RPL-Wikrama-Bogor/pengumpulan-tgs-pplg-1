//import
const express = require('express');
//const { handlerAbout, handlerContact, handlerNews, handlerHome } = require('./router');
const bookRouter =require('./Router/book-router')
const authRouter =require('./Router/auth-router')
//midleware
const authenticateJWT = require('./Middleware/jwt-auth-middleware.js')
//instansiasi
const app = express();

//Middleware JSON Parser
app.use(express.json());        //menerima data JSON

//Middleware request body
app.use(express.urlencoded({
    extended:true
}))
//Book Router
app.use('/book',authenticateJWT , bookRouter);  //kita pakai jwt untuk alurnya
app.use('/auth',authenticateJWT ,authRouter);



//HTTP Method: GET, POST, PUT/PATCH,DELETE

// url root

// const handler =  require('./router') //mengambil function dari router.js
// //untuk memanggil router tergantung array ini
// // const siswa = [
// //     {
// //         id:1,
// //         nama:'Andi',
// //     },
// //     {
// //         id:2,
// //         nama:'Dudan',
// //     },
// //     {
// //         id:3,
// //         nama:'Emok',
// //     },
// // ]
// //membuat router sesuai dengan username/name dan id kita, tanda /: menunjukan agar ke parameter
// app.get('/contohparam/:username', (req, res) => {
//     // . bisa kita ambil dari satu parameter saja
//     //const test = req.params.username
//     //const username = req.params.username
//     //Deconstructor
//     //const {username,id} = req.params
//     //res.send(username)
//     //res.send(req.params);
//     res.send(req.query.sort ?? 'desc');       //untuk mengakses nilai yang opsional sedangkan parameter untuk nilai yang wajib
//                                                 //untuk antisipasi jika nilai querynya kosong maka kita memakai opertation null ??
//     //localhost:8000/contohparam/han?sort=asc
    
// })
// //POSTMAN
// app.post('/test', (req,res) =>{
//     res.send('POST TEST')
// })
// app.put('/test', (req,res) =>{
//     res.send('PUT TEST')
// })
// app.delete('/test', (req,res) =>{
//     res.send('DELETE TEST')
// })
// app.get('/siswa/:id',(req,res) =>{
//     const {id} = req.params;
//     //kita pakai find untuk mencari nilai nama di id, jadi alurnya kita masukin id dan di id itu bisa kita cari nama
//     const student = siswa.find((student) =>
//     student.id == parseInt(id))      //parseInt masuknya ke integer bukan string

//     res.send(student.nama)
// });

// //mengambil function function dari router
// app.get('/', handler.beranda);
// app.get('/about', handler.About);
// app.get('/contact', handler.Contact);
// app.get('/news', handler.News);
// app.get('/home', handler.Home);




//menjalankan
app.listen(8788,() =>{
    console.log('Server berhasil dijalankan di http://localhost:8788')
})