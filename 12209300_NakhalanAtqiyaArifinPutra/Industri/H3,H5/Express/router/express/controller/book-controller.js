//npm i mysql2 buat aplikasiin mysql ke js
const dbConfig = require('../config/db-config');    //import code dari file config
const mysql =require ('mysql2');                    //import mysql
const pool =mysql.createPool                        //untuk
(dbConfig); 

pool.on('error', (error) =>{                        //untuk jaga jaga jika terjadi error
    console.log(error)
})

const getBooks = (req, res) =>{
    //Filter & Sort
    let query = 'SELECT * FROM books;';

    //Sort by tahun /halaman
    // const{sortBy, order} =req.query

    // if(sortBy /= null){
    //     console.log(order)

    //     let query = `SELECT * FROM books ORDER BY ${sortBy} ${order};`

    //     console.log(query)
    // }


pool.getConnection((error,connection) =>{
    if(error) throw error;                                                   //memberi petunjuk error di sql

    connection.query(query,(error,results) =>{
        if(error) throw error;                          //memberi petunjuk error ketika data terquery

       
        sendResponse(res,true,'berhasil menampilkan list',results,200)
        connection.release()               
    })
})
};
        
const getBook = (req, res) =>{
    const {id}  = req.params
    const query = `SELECT * FROM books WHERE id='${id}';`;

pool.getConnection((error,connection) =>{
    if(error) throw error               ;                                               //memberi petunjuk error di sql

    connection.query(query,(error,results) =>{
        if(error) throw error;                              //memberi petunjuk error ketika data terquery
        if(results.length < 1){
            sendResponse(res,false,'Buku tidak ditemukan',results,404)
            return;
        }
        sendResponse(res,true,'Berhasil Mengambil list',results,200)
    connection.release()               
    })
})
};

const addBook = (req, res) =>{
     
    const dataBuku ={
        nama:req.body.nama,
         penulis:req.body.penulis,
         penerbit:req.body.penerbit,
         halaman:req.body.halaman,
         tahun:req.body.tahun,
    }
    //ngambil data data dari table 
    const query = 'INSERT INTO books SET ? ;'
//menkoneksikan data ke dataBuku dan jika terjadi error maka akan dijalankan function error
    pool.getConnection((error,connection) =>{
        if(error) throw error;                                                       //memberi petunjuk error di sql

        connection.query(query,[dataBuku],(error,results) =>{
            if(error) throw error;                                      //memberi petunjuk error ketika data terquery

       sendResponse(res,true,'Buku berhasil ditambahkan',results,200)
            connection.release()                //mengkonekan db
        })
    })
};
const editBook = (req, res) =>{
    const{id} = req.params;

    const dataBuku ={
    nama:req.body.nama,
    penulis:req.body.penulis,
    penerbit:req.body.penerbit,
    halaman:req.body.halaman,
    tahun:req.body.tahun,  
    }

    const query = `UPDATE books SET ? WHERE id = ${id};`;
    pool.getConnection((error, connection) => {
        if(error) throw error ;                                             //memberi petunjuk error di sql

        connection.query(query,[dataBuku,id],(error,results) => {
            if(error) throw error ;                     //memberi petunjuk error ketika data terquery

            if(results.affectedRows < 1){                               //mengecek baris yang terpengaruh   
                sendResponse(res,false,'Buku tidak ditemukan',null,404);
                return;
             }
             sendResponse(res,true,'Buku Berhasil diedit', results, 200)
        })
        connection.release();
    })
};
const delateBook = (req, res) =>{
    const {id} = req.params;

    const query = `DELETE FROM books WHERE id = ${id};`;            

    pool.getConnection((error, connection) =>{
        if(error) throw error;                                          //memberi petunjuk error di sql

        connection.query(query,(error,results) =>{
            if(error) throw error;                                      //memberi petunjuk error ketika data terquery

            if(results.affectedRows < 1){
                sendResponse(res,false, 'Buku tidak ditemukan', null,404);
                return
            }
            sendResponse(res,true,'Buku berhasil dihapus', results, 200)
        })
    })
};

const sendResponse = (res,success,message,data,statusCode) => res.status(statusCode).json({
        success:success,
        message:message,
        data:data
});

module.exports ={
    getBooks,addBook,
    editBook, getBook,
    delateBook 
}
