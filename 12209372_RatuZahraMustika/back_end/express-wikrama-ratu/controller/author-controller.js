const dbConfig = require('../config/db-config');
const mysql = require ('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
});

const getAuthors = (req, res) => {
    // const { sortBy, ascDesc } = req.query;
    const { nama } = req.query;

    //sort $ orderby
    let query = 'SELECT * FROM author;';

    // if (sortBy != null) {
    //     console.log(order);

    //     let query = `SELECT * FROM author ORDER BY ${sortBy} ${order};`;
    //     console.log(query);
    // }

    if (nama != null) {
        query = `SELECT * FROM books WHERE nama LIKE '%${nama}%' ;`;
    }

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results)=> {
            if (error) throw error;

            // if (results.length < 1) {
                // res.status(404).json({
            //         success: false,
            //         message: 'Buku tidak ditemukan',
            //     });
            //     return;
            // }

            // res.json({
            //     success: true,
            //     message: 'Berhasil mengambil list buku',
            //     data: results
            // });
            sendResponse(res, true, 'Berhasil menambahkan author', results, 200);

            connection.release();
        });
    });
};
const getAuthor = (req, res) => {
    const { id } = req.params;
    const query = `SELECT * FROM author WHERE id = '${id}';`;

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results)=> {
            if (error) throw error;

            if (results.length < 1) {
                res.status(404).json({
                    success: false,
                    message: 'Author tidak ditemukan',
                });
                return;
            }

            // res.json({
            //     success: true,
            //     message: 'Berhasil mengambil list buku',
            //     data: results
            // });
            sendResponse(res, true, 'Berhasil mengambil list author', results, 200);


            connection.release();
        });
    });
};
const addAuthor = (req, res) => {
    //id,nama,penulis,penerbit,halaman,tahun

    const dataPenulis = {
        author: req.body.nama
    }

    const query = 'INSERT INTO author SET ? ;' ;
    
    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, [dataPenulis], (error, results) => {
            if (error) throw error;

            // if (results.length < 1) {
            //    sendResponse(res, false, 'Buku tidak ditemukan', null, 404);
            //     return;
            // }

            sendResponse(res, true, 'Penulis berhasil ditambahkan', results, 200);
            
            connection.release();
        });
    });
};
const editAuthor = (req, res) => {
    const { id } = req.params;

    const dataPenulis = {
        author: req.body.nama,
    };

    const query = `UPDATE author SET ? WHERE id = '${id}' ;`;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [dataPenulis] , (err, results) => {
            if (err) throw err;

            if (results.affectedRows < 1) {
                sendResponse(res, false, 'Penulis tidak ditemukan', null, 404);
                return;
            }

            sendResponse(res, true, 'Penulis Berhasil diedit', results, 200);
        });

        connection.release();
    });
};
const deleteAuthor = (req, res) => {  
    const { id } = req.params

    const query = `DELETE FROM author WHERE id = ${id}`;

    pool.getConnection((err, connection) => {
        if (err) throw err;


    connection.query(query, (err, results) => {
        if (err) throw err;
        
        if (results.affectedRows < 1) {
            sendResponse(res, false, 'Penulis tidak ditemukan', null, 404);
            return;
        }

        sendResponse(res, true, 'Penulis berhasil dihapus', results, 200);
    });

  });
};

const sendResponse = (res, success, message, data, statusCode) => res.status(statusCode).json({
    success: success,
    message: message,
    data: data
});

module.exports = {
    getAuthors, 
    getAuthor,
    addAuthor, 
    editAuthor,
    deleteAuthor
}



//const { Connection } = require('mysql2/typings/mysql/lib/Connection');
