// npm i mysql2

const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
})

const getAuthors = (req,res) => {
    // filter
    // const { nama } = req.query;

        // let query = 'SELECT * FROM author ;';

        // if (nama != null){
        //     query = `SELECT * FROM author WHERE nama LIKE '%${nama}%' ;`
        // }

    // sorting tahun ASC and Desc versi me
    
    // const { order } = req.query;
    // const { tahun } = req.query;

    // let query = 'SELECT * FROM author ;';

    // if (tahun != null){
    //     if(order != 'ASC'){
    //         query = `SELECT * FROM author ORDER BY tahun DESC;`
    //     } else {
    //         query = `SELECT * FROM author ORDER BY tahun ASC;`
    //     }
    // }

    // sorting real

    const {sortBy, order} = req.query;

    let query = 'SELECT * FROM author ;';

    if (sortBy != null){
        query = `SELECT * FROM author ORDER BY ${sortBy} ${order};`;
        console.log(query);
    };


    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {
            if (error) throw error;

            sendResponse(res, true, 'Berhasil mengambil list Author', results, 200);

            connection.release();
        })
    })
};  
const getAuthor = (req,res) => {
    const dataAuthor = {
        nama: req.body.nama,
        email: req.body.email,
        alamat: req.body.alamat,
        umur: req.body.umur,
        medsos: req.body.medsos,
    }
    const {id} = req.params;

    const query = `SELECT * FROM author WHERE id = '${id}';`;

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, [dataAuthor], (error, results) => {
            if (error) throw error;
            if (results.length < 1){
                res.status(404).json({
                    success: false,
                    message: 'Author not found.',
                    data: results
                });
                return;
            }

            res.json({
                success: true,
                message: 'Author retrieved.',
                data: results
            });

            connection.release();
        });
    });
};
const addAuthors = (req,res) => {
    const dataAuthor = {
        nama: req.body.nama,
        email: req.body.email,
        alamat: req.body.alamat,
        umur: req.body.umur,
        medsos: req.body.medsos,
    }
    const query = 'INSERT INTO author SET ? ';

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, [dataAuthor], (error, results) => {
            if (error) throw error;

            res.json({
                success: true,
                message: 'Author successfully submitted',
                data: results
            });

            connection.release();
        });
    });
};
const editAuthors = (req,res) => {
    const { id } = req.params;
    const dataAuthor = {
        nama: req.body.nama,
        email: req.body.email,
        alamat: req.body.alamat,
        umur: req.body.umur,
        medsos: req.body.medsos,
    };
    const query = `UPDATE author SET ? WHERE id = ${id} ;`;

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, [dataAuthor], (error, results) => {
            if (error) throw error;

            if (results.affectedRows < 1){
                sendResponse(res, false, 'Author not found.', null, 404);
                return
            }
            sendResponse(res, true, 'Author successfully edited', results, 200);
            return
        });
        connection.release();
    }); 
};
const deleteAuthors = (req,res) => {
    const { id } = req.params;
    const query = `DELETE FROM author WHERE id = ${id} ;`;
    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {
            if (error) throw error;

            if (results.affectedRows < 1){
                sendResponse(res, false, 'Author not found.', null, 404);
                return
            }
            sendResponse(res, true, 'Author successfully removed', results, 200);
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
    getAuthor, getAuthors, addAuthors, editAuthors, deleteAuthors
};