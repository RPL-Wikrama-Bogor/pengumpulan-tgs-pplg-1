// npm i mysql2

const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
})

//Filter and Sort
const getBooks = (req, res) => {
    // const {nama} = req.query;
    const { sortBy, order } = req.query;
    const {tahun} = req.query;
    
    let query = 'SELECT * FROM books ;';
    
    // filter
    // if (nama != null) {
    //     query = `SELECT * FROM books WHERE nama LIKE '%${nama}%' ;`;
    // }

    //sort
    if (sortBy != null) {
        query = `SELECT * FROM books ORDER BY ${sortBy} ${order};`;
        }

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {
            if (error) throw error;

            res.json({
                success: true,
                message: 'Buku berhasil diambil',
                data: results
            });

            connection.release();
        })
    })
};
const getBook = (req, res) => {
    const dataBuku = {
        nama: req.body.nama,
        penulis: req.body.penulis,
        penerbit: req.body.penerbit,
        tahun: req.body.tahun,
        halaman: req.body.halaman,
    }
    const { id } = req.params;

    const query = `SELECT * FROM books WHERE id = '${id}';`;

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, [dataBuku], (error, results) => {
            if (error) throw error;
            if (results.length < 1) {
                SendResponse(res, false, 'buku tidak ditemukan', results, 200)
                return;
            }

            res.json({
                success: true,
                message: 'Book ditemukan.',
                data: results
            });

            connection.release();
        });
    });
};
const addBooks = (req, res) => {
    const dataBuku = {
        nama: req.body.nama,
        penulis: req.body.penulis,
        penerbit: req.body.penerbit,
        tahun: req.body.tahun,
        halaman: req.body.halaman,
    }
    const query = 'INSERT INTO books SET ? ';

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, [dataBuku], (error, results) => {
            if (error) throw error;

            SendResponse(res, true, 'Buku berhasil ditambahkan', results, 200);

            // res.json({
            //     success: true,
            //     message: 'Book successfully submitted',
            //     data: results
            // });

            connection.release();
        });
    });
};
const editBooks = (req, res) => {
    const { id } = req.params;

    const dataBuku = {
        nama: req.body.nama,
        penulis: req.body.penulis,
        penerbit: req.body.penerbit,
        tahun: req.body.tahun,
        halaman: req.body.halaman,
    };

    const query = `UPDATE books SET ? WHERE id = ${id} ;`;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [dataBuku], (err, results) => {
            if (err) throw err;

            if (results.length < 1) {
                SendResponse(res, false, 'Buku tidak ditemukan', null, 404);
                return;
            }

            SendResponse(res, true, 'Buku berhasil diedit', results, 200);

        });
        connection.release();

    });
};

const deleteBooks = (req, res) => {
    const { id } = req.params;

    const query = `DELETE FROM books WHERE id = ${id}`;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, (err, results) => {
            if (err) throw err;

            if (results.affectedRows < 1) {
                SendResponse(res, false, 'tidak ditemukan', null, 404);
                return;
            }


        })
    })
};

const SendResponse = (res, success, message, data, statusCode) => res.status(statusCode).json({
    success: success,
    message: message,
    data: data
});

module.exports = {
    getBook, getBooks, addBooks, editBooks, deleteBooks
};