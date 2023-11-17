const dbConfig = require('../config/db-config');
const mysql = require ('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
});

const getAuthors = (req, res) =>{
    const { sortBy, order } = req.query;

    let query = 'SELECT * FROM authors;';
    // if (nama != null){
    //     query = `SELECT * FROM books WHERE nama LIKE '%${nama}%' ;` ;
    // }
    if (sortBy != null){
        console.log(order);
        const newAscDesc = (ascDesc != null )? ascDesc : 'ASC';
        let query = `SELECT * FROM authors ORDER BY ${sortBy} ${order};` ;
        console.log(query);
    }

    pool.getConnection((error, connection) =>{
        if (error) throw error;

        connection.query(query, (error, results)=> {
            if (error) throw error;
            // res.json({
            //     success: true,
            //     massage: 'Berhasil mengambil list buku',
            //     data: results

            // });
            sendResponse(res, true, 'Berhasil mengambil list penulis', results, 200);
            connection.release();
        });

    });

};

const getAuthor = (req, res) =>{
    const id = req.params.id;
    const  query = `SELECT * FROM authors WHERE id = ${id} ;`;

    pool.getConnection((error, connection) =>{
        if (error) throw error;

        connection.query(query, (error, results)=> {
            if (error) throw error;

            if (results.length < 1) {
                sendResponse(res, false, 'penulis tidak ditemukan', null, 404);
                return;
            }

            // if (results.length < 1 ){
            //     res.status(404).json({
            //         success: false,
            //         message: 'Buku tidak ditemukan',
            //     });
            //     return;
            // }
            // res.json({
            //     success: true,
            //     massage: 'Berhasil mengambil list buku',
            //     data: results

            // });
            sendResponse(res, true, 'Berhasil mengambil list penulis', results, 200);
            connection.release();
        });

    });

};
const addAuthor = (req, res) => {
    const dataAuthor = {
        nama: req.body.nama,
      
    };
    // prepared statement
    const query = 'INSERT INTO authors SET ?;';

    pool.getConnection((error, connection)=> {
        if (error) throw error;

        connection.query(query, [dataAuthor], (error, results) => {
            if (error) throw error;

            // res.json({
            //     success: true,
            //     message: 'Buku berhasil ditambahkan',
            //     data: results
            // });
            sendResponse(res, true, 'penulis berhasil ditambahkan', results, 200 );
            connection.release();
            
        });
    });

};
const editAuthor = (req, res) => {
    const { id } = req.params;

    const dataAuthor ={
        nama: req.body.nama,
       
    };
    const query = `UPDATE authors SET ? WHERE id = ${id} ;`;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [dataAuthor], (err, results) => {
            if (err) throw err;
            if (results.affectedRows < 1) {
                sendResponse(res, false, 'penulis tidak ditemukan', null, 404);
                return;
            }
            sendResponse(res, true, 'penulis berhasil diedit', results, 200);
            connection.release();
        });
    });

};
const deleteAuthor = (req, res) => {
    const { id } = req.params;
    const query = `DELETE FROM authors WHERE id = ${id}`;

    pool.getConnection((err, connection)=> {
        if (err) throw err;

        connection.query(query,(err, results) =>{
            if (err) throw err;

            if (results.affectedRows < 1){
                sendResponse(res, false, 'penulis tidak ditemukan', null, 404);
                return;
            }

            sendResponse(res, true, 'penulis berhasil dihapus', results, 200);
        });

    });

};


const sendResponse = (res, success, message, data, statusCode) => res.status(statusCode).json({
    success: success,
    massage: message,
    data: data

});

module.exports = {
    getAuthors, getAuthor, addAuthor, editAuthor, deleteAuthor
}

