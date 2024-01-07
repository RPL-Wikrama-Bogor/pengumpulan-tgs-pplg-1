// const { Connection } = require('mysql2/typings/mysql/lib/Connection');
const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
});

// Filter & Sort
const getBooks = (req, res) => {

    const { sort, sortir, nama, tahun } = req.query;

    // SORTBY  & ascDesc
    const { sortBy, order } = req.query;

    let query = 'SELECT * FROM books';
    
    // Sort By Tahun / Halaman
    if (nama != null) {
        query = `SELECT * FROM books WHERE nama LIKE '%${nama}%';`;
    }

    if (sort === 'tahun' || sort === 'halaman') {
        query += ` ORDER BY ${sort}`;
    
        // asc = dari terkecil ke besar
        // desc = besar ke kecil
        if (sortir === 'desc') {
          query += " DESC";
        } else {
          query += " ASC";
        }
    }
    
    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {
            if(error) throw error;

            // res.json({
            //     succes: true,
            //     message: 'Berhasil mengambil list Buku',
            //     data: results
            // });
            sendResponse(res, true, 'Berhasil mengambil list Buku', results, 200);

            connection.release();

        });
    });
};
const getBook = (req, res) => {
    const {id} = req.params;
    const query = `SELECT * FROM books WHERE id= ${id} ; `;

    pool.getConnection((error, connection) => {
        if (error) throw error;

        
        connection.query(query, (error, results) => {
            if(error) throw error;
            
            if(results.length < 1){
                // res.status(404).json({
                //     succes: false,
                //     message: "Buku tidak di temukan",
                // });
                sendResponse(res, false, 'Buku tidak di temukan', null, 404);
                return;
            }
            // res.json({
                //     succes: true,
                //     message: 'Berhasil mengambil Buku',
                //     data: results
                // });
            sendResponse(res, true, 'Berhasil mengambil buku', results, 200);
                
            connection.release();

        });
    });
};
const addBook = (req, res) => {
    // id, nama, penulis, penerbit, halaman, tahun
    const dataBook = {
        nama: req.body.nama,
        penulis: req.body.penulis,
        penerbit: req.body.penerbit,
        tahun: req.body.tahun,
        halaman: req.body.halaman,
    }
    // tanda tanya = Prepared Statement (memasuki data)
    const query = 'INSERT INTO books SET ? ;';

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, [dataBook], (error, results) => {
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
    const dataBook = {
        nama: req.body.nama,
        penulis: req.body.penulis,
        penerbit: req.body.penerbit,
        tahun: req.body.tahun,
        halaman: req.body.halaman,
    };

    const query = `UPDATE books SET ? WHERE id = ${id};`;

    pool.getConnection((err, connection) => {
        if(err) throw err;

        connection.query(query, [dataBook], (err, results) => {
            if(err) throw err;
            if(results.affectedRows < 1){
                sendResponse(res, false, 'Buku tidak di temukan', null, 404);
                return;
            }

            sendResponse(res, true, 'Buku berhasil di edit', results, 200);
        });

        connection.release();
    });
};
const deleteBook = (req, res) => {
    const { id } = req.params;

    const query = `DELETE FROM books WHERE id = ${id};`;

    pool.getConnection((err, connection) => {
        if(err) throw err;

        connection.query(query, (err, results) => {
            if(err) throw err;
            if(results.affectedRows < 1){
                sendResponse(res, false, 'Buku tidak di temukan', null, 404);
                return;
            }

            sendResponse(res, true, 'Buku berhasil di hapus', results, 200);
        });

        connection.release();
    });
};

const sendResponse = (res, succes, message, data, statusCode) => {
    res.status(statusCode).json({
        succes: succes,
        message: message,
        data: data,
    });
}

module.exports = {
    getBooks, getBook, addBook, editBook, deleteBook
}