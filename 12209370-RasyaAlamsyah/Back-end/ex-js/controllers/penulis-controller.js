const dbConfig = require('../config/db-config');
const mysql = require ('mysql2');
// const { PoolConnection } = require('mysql2/typings/mysql/lib/PoolConnection');
// const { Connection } = require('mysql2/typings/mysql/lib/Connection');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) =>  {
    console.log(error);
});

const getBooks= (req, res) => {
    const  {sortBy, order} = req.query;

    let query = 'SELECT * FROM author ;';

    if (sortBy !=  null) {
        console.log(order);

        let query = `SELECT * FROM author ORDER BY tahun ${sortBy} ${order};`;

        console.log(query);
    }

    pool.getConnection((error, connection) => {
        if(error) throw error;

        connection.query(query, (error, results) => {
            if (error) throw error;

            res.json({
                success:true,
                message: 'Berhasil mengambil list author',
                data: results

            });

            connection.release();
        });
    });
};

const getBook= (req, res) => {
    const id_book = req.params.id;
    const query = 'SELECT * FROM author WHERE id = ? ;';

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, [id_book], (error, results) => {
                if (error) throw error;

                if (results.length< 1) {

                    sendResponse(res, false, 'author tidak ditemukan', null, 404);
                    return;
                }
                res.json ({
                    success: true,
                    message: 'Berhasil Mengambil list author',
                    data: results
                });
                connection.release();
            });
    });
};

const addBook = (req, res) => {
    // id,nama,penulis,penerbit,tahun,halaman

    const dataBuku = {
        nama: req.body.nama
        // penulis: req.body.penulis,
        // penerbit: req.body.penerbit,
        // tahun: req.body.tahun,
        // halaman: req.body.halaman,
    }
    //prepare statment
    const query = 'INSERT INTO author SET ? ;';

    pool.getConnection((error, connection) => {
        if(error) throw error;

        connection.query(query, [dataBuku], (error, results) => {
        if(error) throw error;

            res.json( {
                success: true,
                message: 'author Berhasil ditambahkan',
                data: results
            });

            connection.release();

        });
    });
};

const editBook = (req, res) => {
    const { id } = req.params;

    const dataBuku = {
        nama: req.body.nama
        // penulis: req.body.penulis,
        // penerbit: req.body.penerbit,
        // tahun: req.body.tahun,
        // halaman: req.body.halaman,
    };

    const query = 'UPDATE author SET ? WHERE id = ? ;';

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [dataBuku, id] ,(err, results) => {
        
            if (results.affectedRows < 1) {

                sendResponse(res, false, 'author tidak ditemukan', null, 404);
                return;
            }

            sendResponse(res, true, 'author berhasil di edit', results, 200);
        });

        connection.release();
    });
};

const deleteBook= (req, res) =>
{
    const { id } = req.params;
    
    const query = `DELETE FROM author WHERE id = ${id}`;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, (err, results) => {
            if (err) throw err;

            if (results.affectedRows < 1) {
                sendResponse(res, false, 'author tidak ditemukan', null, 404);
                return;
            }

            sendResponse(res, true, 'author berhasil dihapus', results, 200);

            connection.release();
        });
    })
};



const sendResponse = (res, success, message, data, statusCode) => res.status(statusCode).json({
    success: success,
    message: message,
    data: data
});

module.exports = {
    getBooks, getBook,addBook,editBook,deleteBook
}