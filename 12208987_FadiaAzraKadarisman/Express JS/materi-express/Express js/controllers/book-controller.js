const dbConfig = require('../config/db-config.js');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) =>{
    console.log(error);
});

// filter & sort
const getBooks = (req, res) => {
    const { nama , sort, sortir, sortBy, order} = req.query;
    let query = 'SELECT * FROM books ';

    if (nama != null) {
        query = `SELECT * FROM books WHERE nama LIKE '%${nama}%';`;
    }

    if (sort  === 'tahun' || sort === 'halaman') {
        query += ` ORDER BY ${sort}`;
    
        if (sortir.toLowerCase() === 'desc') {
          query += " DESC";
        } else {
          query += " ASC";
        }
    }
    
    // sort cara kak farhan
    // if (sortBy != null) {
    //     let query = `SELECT * FROM books ORDER BY ${sortBy} ${order}`;
    // }
    
    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query,(error, results) => {
            if (error) throw error;

            // res.json({ 
            //     success: true,
            //     message: 'Berhasil mengambil list buku',
            //     data: results
            // }); 
            sendResponse(res, true, 'Berhasil mengambil list buku', results, 200);

            connection.release();
        });
    });
};
const getBook = (req, res) => {
    const { id } = req.params; 
    const query = `SELECT * FROM books WHERE id = ${id};`;

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query,(error, results) => {
            if (error) throw error;

            if(results.length < 1){
                // res.status(404).json({ 
                //     success: false,
                //     message: 'Buku tidak ditemukan',
                // }); 
                sendResponse(res, false, 'Buku tidak ditemukan', null, 404);
                return;
            }

            // res.json({ 
            //     success: true,
            //     message: 'Berhasil mengambil list buku',
            //     data: results
            // }); 
            sendResponse(res, true, 'Berhasil mengambil list buku', results, 200);

            connection.release();
        });
    });

};
const addBook = (req, res) => {
    // id, nama, penulis, penerbit, halaman, tahun
    const dataBuku = {
        nama: req.body.nama,  // express default tidak memiliki body
        penulis: req.body.penulis,
        penerbit: req.body.penerbit,
        tahun: req.body.tahun,
        halaman: req.body.halaman
    } 
    
    // prepared statement menjadi lebih aman
    const query = 'INSERT INTO books SET ?'; // ? namanya prepared statement, diberikan tanda tanya karena bisa eject data

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, [dataBuku], (error, results) => {
            if (error) throw error;
            // mengirim data sebagai json
            // res.json({ 
            //     success: true,
            //     message: 'Buku berhasil ditambahkan',
            //     data: results
            // }); 
            sendResponse(res, true, 'Buku berhasil ditambahkan', results, 200);

            connection.release();
        });
    });
};
const editBook = (req, res) => {
    const { id } = req.params; 
    
    const dataBuku = {
        nama: req.body.nama, 
        penulis: req.body.penulis,
        penerbit: req.body.penerbit,
        tahun: req.body.tahun,
        halaman: req.body.halaman
    } 

    const query = 'UPDATE books SET ? WHERE id = ? ;'; // bisa lgsg pake ${id}
    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [dataBuku, id], (err, results) => {
            if (err) throw err;

            if(results.affectedRows < 1){
                sendResponse(res, false, 'Buku tidak ditemukan', null, 404);
                return;
            };

            sendResponse(res, true, 'Buku berhasil diedit', results, 200);
            connection.release();
        });
    });
};
const deleteBook = (req, res) => {
    const { id } = req.params;
    const query = `DELETE FROM books WHERE id = ${id};`;
    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, (err, results) => {
            if (err) throw err;

            if(results.affectedRows < 1){
                sendResponse(res, false, 'Buku tidak ditemukan', null, 404);
                return;
            };

            sendResponse(res, true, 'Buku berhasil dihapus', results, 200);
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
    getBooks, getBook, 
    addBook, editBook, 
    deleteBook
}

// res.send dan res.json hanya mengirim tapi tidak me return