const dbConfig = require('../config/db_config');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);
pool.on('error' , (error) =>{
    console.log(error);
})

const getWriters = ((req, res) =>{
    
    const query = 'SELECT * FROM writers';

    pool.getConnection((error,connection) => {
        if(error) throw error;

        connection.query(query, (error,result) =>{
            if(error) throw error;

            res.json({
                succes: true,
                message: 'Berhasil mengambil list data Penulis',
                data: result,
            });
            connection.release();
     
        });
    })

})
const getWriter = ((req, res) =>{
    const { id } = req.params;
    const query = `SELECT * FROM writers WHERE id = ${id}`;

    pool.getConnection((error, connection) =>{
        if(error) throw error;

        connection.query(query , (error, results) =>{
                if(error) throw error;

                if(results.length < 1) {
                    res.status(404).json({
                        succes: true,
                        message: 'Data Penulis tidak di temukan',
                    })
                }

                res.json({
                    succes: true,
                    message: 'Data Penulis berhasil ditemukan ',
                    data: results,
                });
                connection.release();
        });
    })
})
const addWriters = ((req, res) =>{
    const query = 'INSERT INTO writers SET ? ;';
    const dataPenulis = {
        nama: req.body.nama
    }
    pool.getConnection((error, connection) =>{
        if(error) throw error;

        connection.query(query , [dataPenulis], (error, results) =>{
                if(error) throw error;

                res.json({
                    succes: true,
                    message: 'Data Penulis berhasil di tambahkan',
                    data: results,
                });
                connection.release();
            });
    })
});
const editWriters = ((req, res) =>{
    const { id } = req.params;

    const dataPenulis = {
        nama : req.body.nama,
    };

    const query = `UPDATE writers SET ? WHERE id = ${id};`;

    pool.getConnection((err, connection) =>{
        if(err) throw err;

        connection.query(query,[dataPenulis] ,(err, results) =>{
            if(err) throw err;
            if(results.affectedRows < 1) {
                sendResponse(res, false, 'Nama penulis tidak di temukan' , null,404);
                return;
            }

            sendResponse(res, true, 'Nama penulis berhasil di edit', results, 200);
        });
        connection.release();
    })
})
const deleteWriters = ((req, res) =>{
    const {id} = req.params;

    const query = `DELETE FROM writers WHERE id = ${id};`;
    
    pool.getConnection((err, connection)=>{
        if(err) throw err;
        
        connection.query(query, (err,results)=>{
            if(err) throw err;

            if(results.affectedRows < 1){
                sendResponse(res, false, 'Data penulis tidak di temukan ', null, 404);
                return;
            }
            sendResponse(res, true, 'Data penulis berhasil di hapus', results, 200);
        })
        connection.release();
    });
})

const sendResponse = (res, succes, message , data, statusCode) => res.status(statusCode).json({
    Succes: succes,
    message: message,
    data: data,
});

module.exports = {
    getWriter,
    getWriters,
    editWriters,
    deleteWriters,
    addWriters,
}