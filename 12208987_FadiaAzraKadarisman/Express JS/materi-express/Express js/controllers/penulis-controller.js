const dbConfig = require('../config/db-config.js');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) =>{
    console.log(error);
});

const getAuthors = (req, res) => {
    const { nama } = req.query;
    let query = 'SELECT * FROM authors ';

    if (nama != null) {
        query = `SELECT * FROM authors WHERE nama LIKE '%${nama}%';`;
    }
    
    
    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query,(error, results) => {
            if (error) throw error;

            sendResponse(res, true, 'Berhasil mengambil list Author', results, 200);

            connection.release();
        });
    });
};
const getAuthor = (req, res) => {
    const { id } = req.params; 
    const query = `SELECT * FROM authors WHERE id = ${id};`;

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query,(error, results) => {
            if (error) throw error;

            if(results.length < 1){
                sendResponse(res, false, 'Data tidak ditemukan', null, 404);
                return;
            }

            sendResponse(res, true, 'Berhasil mengambil list Author', results, 200);

            connection.release();
        });
    });

};
const addAuthor = (req, res) => {
    const dataBuku = {
        nama: req.body.nama, 
    } 
    const query = 'INSERT INTO authors SET ?';

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, [dataBuku], (error, results) => {
            if (error) throw error;
            sendResponse(res, true, 'Data berhasil ditambahkan', results, 200);

            connection.release();
        });
    });
};
const editAuthor = (req, res) => {
    const { id } = req.params; 
    
    const dataAuthor = {
        nama: req.body.nama
    }

    const query = 'UPDATE authors SET ? WHERE id = ? ;'; 
    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [dataAuthor, id], (err, results) => {
            if (err) throw err;

            if(results.affectedRows < 1){
                sendResponse(res, false, 'Data tidak ditemukan', null, 404);
                return;
            };

            sendResponse(res, true, 'Data berhasil diedit', results, 200);
            connection.release();
        });
    });
};
const deleteAuthor = (req, res) => {
    const { id } = req.params;
    const query = `DELETE FROM authors WHERE id = ${id};`;
    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, (err, results) => {
            if (err) throw err;

            if(results.affectedRows < 1){
                sendResponse(res, false, 'Data tidak ditemukan', null, 404);
                return;
            };

            sendResponse(res, true, 'Data berhasil dihapus', results, 200);
            connection.release();
        });
    });
};

const sendResponse = (res, success, message, data, statusCode) => res.status(statusCode).json({
    success: success,
    message: message,
    data: data
})

module.exports = {
    getAuthors, getAuthor, 
    addAuthor, editAuthor, 
    deleteAuthor
}