//npm i mysql2 buat aplikasiin mysql ke js
const dbConfig = require('../config/db-config');    //import code dari file config
const mysql =require ('mysql2');                    //import mysql
const pool =mysql.createPool                        //untuk
(dbConfig); 

pool.on('error', (error) =>{                        //untuk jaga jaga jika terjadi error
    console.log(error)
})

const getAuthors = (req, res) =>{
    //Filter & Sort
    
    
    let query = 'SELECT * FROM nama;';

    //Sort by tahun /halaman
    const{sortBy, order} =req.query

    if(sortBy /= null){
        console.log(order)

        let query = `SELECT * FROM nama ORDER BY ${sortBy} ${order};`

        console.log(query)
    }


pool.getConnection((error,connection) =>{
    if(error) throw error;                                                   //memberi petunjuk error di sql

    connection.query(query,(error,results) =>{
        if(error) throw error;                          //memberi petunjuk error ketika data terquery

       
        sendResponse(res,true,'berhasil menampilkan list',results,200)
        connection.release()               
    })
})
};
        
const getAuthor = (req, res) =>{
    const {id}  = req.params
    const query = `SELECT * FROM nama WHERE id='${id}';`;

pool.getConnection((error,connection) =>{
    if(error) throw error               ;                                               //memberi petunjuk error di sql

    connection.query(query,(error,results) =>{
        if(error) throw error;                              //memberi petunjuk error ketika data terquery
        if(results.length < 1){
            sendResponse(res,false,'Penulis tidak ditemukan',results,404)
            return;
        }
        sendResponse(res,true,'Berhasil Mengambil list',results,200)
    connection.release()               
    })
})
};

const addAuthor = (req, res) =>{
     
    const dataPenulis ={
        nama:req.body.nama,
        // penulis:req.body.penulis,
        // penerbit:req.body.penerbit,
        // halaman:req.body.halaman,
        // tahun:req.body.tahun,
    }

    //ngambil data data dari table 
    const query = 'INSERT INTO nama SET ? ;'
//menkoneksikan data ke dataPenulis dan jika terjadi error maka akan dijalankan function error
    pool.getConnection((error,connection) =>{
        if(error) throw error;                                                       //memberi petunjuk error di sql

        connection.query(query,[dataPenulis],(error,results) =>{
            if(error) throw error;                                      //memberi petunjuk error ketika data terquery

       sendResponse(res,true,'Penulis berhasil ditambahkan',results,200)
            connection.release()                //mengkonekan db
        })
    })
};
const editAuthor = (req, res) =>{
    const{id} = req.params;

    const dataPenulis ={
    nama:req.body.nama,
    // penulis:req.body.penulis,
    // penerbit:req.body.penerbit,
    // halaman:req.body.halaman,
    // tahun:req.body.tahun,  
    }

    const query = `UPDATE nama SET ? WHERE id = ${id};`;
    pool.getConnection((error, connection) => {
        if(error) throw error ;                                             //memberi petunjuk error di sql

        connection.query(query,[dataPenulis,id],(error,results) => {
            if(error) throw error ;                     //memberi petunjuk error ketika data terquery

            if(results.affectedRows < 1){                               //mengecek baris yang terpengaruh   
                sendResponse(res,false,'Penulis tidak ditemukan',null,404);
                return;
             }
             sendResponse(res,true,'Penulis Berhasil diedit', results, 200)
        })
        connection.release();
    })
};
const delateAuthor = (req, res) =>{
    const {id} = req.params;

    const query = `DELETE FROM nama WHERE id = ${id};`;            

    pool.getConnection((error, connection) =>{
        if(error) throw error;                                          //memberi petunjuk error di sql

        connection.query(query,(error,results) =>{
            if(error) throw error;                                      //memberi petunjuk error ketika data terquery

            if(results.affectedRows < 1){
                sendResponse(res,false, 'Penulis tidak ditemukan', null,404);
                return
            }
            sendResponse(res,true,'Penulis berhasil dihapus', results, 200)
        })
    })
};

const sendResponse = (res,success,message,data,statusCode) => res.status(statusCode).json({
        success:success,
        message:message,
        data:data
});

module.exports ={
    getAuthors,addAuthor,
    editAuthor, getAuthor,
    delateAuthor 
}
