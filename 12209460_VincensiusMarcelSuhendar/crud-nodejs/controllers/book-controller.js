// npm i mysql2

const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
})

const getBooks = (req,res) => {
    // filter
    // const { nama } = req.query;

        // let query = 'SELECT * FROM books ;';

        // if (nama != null){
        //     query = `SELECT * FROM books WHERE nama LIKE '%${nama}%' ;`
        // }

    // sorting tahun ASC and Desc versi me
    
    // const { order } = req.query;
    // const { tahun } = req.query;

    // let query = 'SELECT * FROM books ;';

    // if (tahun != null){
    //     if(order != 'ASC'){
    //         query = `SELECT * FROM books ORDER BY tahun DESC;`
    //     } else {
    //         query = `SELECT * FROM books ORDER BY tahun ASC;`
    //     }
    // }

    // sorting real

    const {sortBy, order} = req.query;

    let query = 'SELECT * FROM books ;';

    if (sortBy != null){
        let query = `SELECT * FROM books ORDER BY ${sortBy} ${order};`;
        console.log(query);
    };


    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {
            if (error) throw error;

            sendResponse(res, true, 'Berhasil mengambil list Buku', results, 200);

            connection.release();
        })
    })
};
const getBook = (req,res) => {
    const dataBuku = {
        nama: req.body.nama,
        penulis: req.body.penulis,  
        penerbit: req.body.penerbit,
        tahun: req.body.tahun,
        halaman: req.body.halaman,
    }
    const {id} = req.params;

    const query = `SELECT * FROM books WHERE id = '${id}';`;

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, [dataBuku], (error, results) => {
            if (error) throw error;
            if (results.length < 1){
                res.status(404).json({
                    success: false,
                    message: 'Book not found.',
                    data: results
                });
                return;
            }

            res.json({
                success: true,
                message: 'Book retrieved.',
                data: results
            });

            connection.release();
        });
    });
};
const addBooks = (req,res) => {
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

            res.json({
                success: true,
                message: 'Book successfully submitted',
                data: results
            });

            connection.release();
        });
    });
};
const editBooks = (req,res) => {
    const { id } = req.params;
    const dataBuku = {
        nama: req.body.nama,
        penulis: req.body.penulis,  
        penerbit: req.body.penerbit,
        tahun: req.body.tahun,
        halaman: req.body.halaman,
    };
    const query = `UPDATE books SET ? WHERE id = ${id} ;`;

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, [dataBuku], (error, results) => {
            if (error) throw error;

            if (results.affectedRows < 1){
                sendResponse(res, false, 'Book not found.', null, 404);
                return
            }
            sendResponse(res, true, 'Book successfully edited', results, 200);
            return
        });
        connection.release();
    }); 
};
const deleteBooks = (req,res) => {
    const { id } = req.params;
    const query = `DELETE FROM books WHERE id = ${id} ;`;
    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {
            if (error) throw error;

            if (results.affectedRows < 1){
                sendResponse(res, false, 'Book not found.', null, 404);
                return
            }
            sendResponse(res, true, 'Book successfully deleted', results, 200);
            return
        });
        connection.release();
    });
};

const sendResponse = (res, success, message, data, statusCode) => res.status(statusCode).json({
    success: success,
    message: message,
    data: data
});

module.exports = {
    getBook, getBooks, addBooks, editBooks, deleteBooks
};