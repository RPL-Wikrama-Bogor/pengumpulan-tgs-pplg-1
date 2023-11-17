const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);
//pool untuk menyimpan connection, jika ada error bisa langsung dilihat db nya jalan atau ngga
pool.on('error', (error) => {
    console.log(error);
});

// filter & sort 
const getBooks = (req, res) => {
    const { sortBy, order } = req.query;

    let query = 'SELECT * FROM books;';

    if (sortBy != null) {
        console.log(order);

        let query = `SELECT * FROM books ORDER BY ${sortBy} ${order};`;

        console.log(query);
    }
    // const { nama } = req.query;

    // let query = 'SELECT * FROM books;';

    // if (nama != null) {
    //     query = `SELECT * FROM books WHERE nama LIKE '%${nama}%' ;`;
    // }

    pool.getConnection((error, connection) =>{
        if (error) throw error;

        connection.query(query, (error, results) => {
            if (error) throw error;

            sendResponse(res, true, 'berhasil mengambil list buku', results, 200);

        });
        connection.release();
    });
};
const getBook = (req, res) => {
    const { id } = req.params;
    const query = `SELECT * FROM books WHERE id = '${id}';`;

    pool.getConnection((error, connection) =>{
        if (error) throw error;

        connection.query(query, (error, results) => {
            if (error) throw error;

            if (results.length < 1) {
                sendResponse(res, false, 'buku tidak ditemukan', null, 404);
                return;
            };

            sendResponse(res, true, 'berhasil mengambil buku', results, 200);

        });
        connection.release();
    });
};
const addBook = (req, res) => {
    //id, nama, penulis, penerbit, tahun, halaman
    const dataBuku = {
        nama: req.body.nama,
        penulis: req.body.penulis,
        penerbit: req.body.penerbit,
        halaman: req.body.halaman,
        tahun: req.body.tahun,
    }

    //prepared statement
    const query = 'INSERT INTO books SET ? ;';

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, [dataBuku], (error, results) => {
            if (error) throw error;

            sendResponse(res, true, 'buku berhasil di tambahkan', results, 200);
        });
        connection.release();
    });
};
const editBook = (req, res) => {
    const {id} = req.params;

    const dataBuku = {
        nama: req.body.nama,
        penulis: req.body.penulis,
        penerbit: req.body.penerbit,
        halaman: req.body.halaman,
        tahun: req.body.tahun,
    };

    const query = `UPDATE books SET ? WHERE id = ? ;`;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [dataBuku, id], (err, results) => {
            if (err) throw err;
            
            if (results.affectedRows < 1) {
                sendResponse(res, false, 'buku tidak ditemukan', null, 404);
                return;
            };

            sendResponse(res, true, 'buku berhasil diedit', results, 200);
        });

        connection.release();
    });
};
const deleteBook = (req, res) => {
    const {id} = req.params;

    const query = `DELETE FROM books WHERE id = ${id}`;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, (err, results) => {
            if (err) throw err;
            
            if (results.affectedRows < 1) {
                sendResponse(res, false, 'buku tidak ditemukan', null, 404);
                return;
            };

            sendResponse(res, true, 'buku berhasil di hapus', results, 200);
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
    getBooks,
    getBook,
    addBook,
    editBook,
    deleteBook
}