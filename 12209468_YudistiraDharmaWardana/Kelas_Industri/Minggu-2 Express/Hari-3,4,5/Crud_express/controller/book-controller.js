const dbConfig = require('../config/db_config');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);
pool.on('error' , (error) =>{
    console.log(error);
})

//filter & sorting 

const getBooks = (req,res)=>{
    //filter by nama
    const { nama } = req.query; 

    let query = 'SELECT * FROM books;';

    // filter nama 

    // if(nama != null){
    //     query = `SELECT * FROM books  WHERE nama LIKE '%${nama}%'`;
    // }

    //sort by tehun / halaman 
    const { shortBy , order} = req.query;

    if (shortBy != null){
        console.log(order);

        let query = `SELECT * FROM books ORDER BY ${shortBy} ${order}`;

        console.log(query);
    }


    
    pool.getConnection((error,connection) => {
        if(error) throw error;

        connection.query(query, (error,result) =>{
            if(error) throw error;

            res.json({
                succes: true,
                message: 'Berhasil mengambil list Buku',
                data: result,
            });
            connection.release();
     
        });
    })
};
const getBook = (req,res)=>{
    const { id } = req.params;
    const query = `SELECT * FROM books WHERE id = ${id}`;

    pool.getConnection((error, connection) =>{
        if(error) throw error;

        connection.query(query , (error, results) =>{
                if(error) throw error;

                if(results.length < 1) {
                    res.status(404).json({
                        succes: true,
                        message: 'buku tidak di temukan',
                    })
                }

                res.json({
                    succes: true,
                    message: 'buku berhasil di tambahkan',
                    data: results,
                });
                connection.release();
        });
    } )


};
const addBooks = (req,res)=>{
    //id, nama , penulis , penerbit , halaman , tahun 
    const query = 'INSERT INTO books SET ? ;';
    const dataBuku = {
        nama : req.body.nama,
        penulis : req.body.penulis,
        penerbit : req.body.penerbit,
        halaman : req.body.halaman,
        tahun : req.body.tahun,
    }
    pool.getConnection((error, connection) =>{
        if(error) throw error;

        connection.query(query , [dataBuku], (error, results) =>{
                if(error) throw error;

                res.json({
                    succes: true,
                    message: 'buku berhasil di tambahkan',
                    data: results,
                });
                connection.release();
            });
    } )
    
};
const editBooks = (req,res)=>{
    const { id } = req.params;

    const dataBuku = {
        nama : req.body.nama,
        penulis : req.body.penulis,
        penerbit : req.body.penerbit,
        halaman : req.body.halaman,
        tahun : req.body.tahun,
    };

    const query = `UPDATE books SET ? WHERE id = ${id};`;

    pool.getConnection((err, connection) =>{
        if(err) throw err;

        connection.query(query,[dataBuku] ,(err, results) =>{
            if(err) throw err;
            if(results.affectedRows < 1) {
                sendResponse(res, false, 'buku tidak di temukan' , null,404);
                return;
            }

            sendResponse(res, true, 'buku berhasil di edit', results, 200);
        });
        connection.release();
    })
};
const deleteBooks = (req,res)=>{
    const {id} = req.params;

    const query = `DELETE FROM books WHERE id = ${id};`;
    
    pool.getConnection((err, connection)=>{
        if(err) throw err;
        
        connection.query(query, (err,results)=>{
            if(err) throw err;

            if(results.affectedRows < 1){
                sendResponse(res, false, 'buku tidak di temukan ', null, 404);
                return;
            }
            sendResponse(res, true, 'buku berhasil di hapus', results, 200);
        })
        connection.release();
    });
};

const sendResponse = (res, succes, message , data, statusCode) => res.status(statusCode).json({
    Succes: succes,
    message: message,
    data: data,
});

module.exports = {
    getBook,
    getBooks,
    editBooks,
    deleteBooks,
    addBooks,
}