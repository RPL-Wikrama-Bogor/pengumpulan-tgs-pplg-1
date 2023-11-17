const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
});

// filter & sort
const getPenuliss = (req, res) => {
    const { nama } = req.query;

    let query = 'SELECT * FROM penulis;';

    if (nama != null) {
        query = `SELECT * FROM penulis WHERE nama LIKE '%${nama}%' ;`;
    };

    pool.getConnection((error, connection) =>{
        if (error) throw error;

        connection.query(query, (error, results) => {
            if (error) throw error;

            sendResponse(res, true, 'berhasil mengambil list penulis', results, 200);

        });
        connection.release();
    });
};
const getPenulis = (req, res) => {
    const { id } = req.params;
    const query = `SELECT * FROM penulis WHERE id = '${id}';`;

    pool.getConnection((error, connection) =>{
        if (error) throw error;

        connection.query(query, (error, results) => {
            if (error) throw error;

            if (results.length < 1) {
                sendResponse(res, false, 'penulis tidak ditemukan', null, 404);
                return;
            };

            sendResponse(res, true, 'berhasil mengambil penulis', results, 200);

        });
        connection.release();
    });
};
const addPenulis = (req, res) => {
    //id, nama, penulis, penerbit, tahun, halaman
    const datapenulis = {
        nama: req.body.nama
    }

    //prepared statement
    const query = 'INSERT INTO penulis SET ? ;';

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, [datapenulis], (error, results) => {
            if (error) throw error;

            sendResponse(res, true, 'penulis berhasil di tambahkan', results, 200);
        });
        connection.release();
    });
};
const editPenulis = (req, res) => {
    const {id} = req.params;

    const datapenulis = {
        nama: req.body.nama
    };

    const query = `UPDATE penulis SET ? WHERE id = ? ;`;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [datapenulis, id], (err, results) => {
            if (err) throw err;
            
            if (results.affectedRows < 1) {
                sendResponse(res, false, 'penulis tidak ditemukan', null, 404);
                return;
            };

            sendResponse(res, true, 'penulis berhasil diedit', results, 200);
        });

        connection.release();
    });
};
const deletePenulis = (req, res) => {
    const {id} = req.params;

    const query = `DELETE FROM penulis WHERE id = ${id}`;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, (err, results) => {
            if (err) throw err;
            
            if (results.affectedRows < 1) {
                sendResponse(res, false, 'penulis tidak ditemukan', null, 404);
                return;
            };

            sendResponse(res, true, 'penulis berhasil di hapus', results, 200);
        });

        connection.release();
    })
};

const sendResponse = (res, sucsess, message, data, statusCode) => res.status(statusCode).json({
    success: sucsess,
    message: message,
    data: data
});

module.exports = {
    getPenuliss,
    getPenulis,
    addPenulis,
    editPenulis,
    deletePenulis
}