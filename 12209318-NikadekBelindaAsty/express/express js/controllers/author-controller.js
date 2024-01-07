const dbConfig = require('../config/db_config');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
});


const getAuthors = (req, res) => {
    // filter & sort 
    const {nama} = req.query;
    
    let query = 'SELECT * FROM penulis; ';

    if (nama != null){
        query = `SELECT * FROM penulis WHERE nama LIKE '%${nama}%' ;`
    }

    pool.getConnection((error, connection) => {
        if(error) throw error;

        connection.query(query, (error,
            results) =>{
                if(error) throw error;

                // res.json({
                //     success: true,
                //     message: 'Berhasil mengambil list Buku',
                //     data: results
                // });


               sendResponse(res, true, 'Berhasil mengambil list penulis', results, 200);

                connection.release();
            });
    });

};


const getAuthor = (req, res) => {
   const {id} = req.params;
   const query = `SELECT * FROM penulis WHERE id = ${id};`;
   
   pool.getConnection((error, connection) => {
    if(error) throw error;

    connection.query(query, (error,
        results) =>{
            if(error) throw error;

            if(results.length < 1){
                // res.status(404).json({
                //     success: false,
                //     message: 'Buku tidak ditemukan',
                // });
                sendResponse(res, false, 'Penulis tidak ditemukan', null, 404);
                return;
            }

            // res.json({
            //     success: true,
            //     message: 'Berhasil mengambil Buku',
            //     data: results
            // });

            sendResponse(res, true, 'Berhasil mengambil Penulis', results, 200);

            connection.release();
        });
});
};


const addAuthor = (req, res) => {
    // id, nama, penulis, penerbit, tahun, halaman 

    const dataPenulis = {
        nama: req.body.nama,
    }

    // prepare statement
    const query = 'INSERT INTO penulis SET ? ;';

    pool.getConnection((error, connection) => {
        if(error) throw error;

        connection.query(query, [dataPenulis], (error, results) => {
            if(error) throw error;

            // json mengirim data sebagai json
            // res.json({
            //     success: true,
            //     message: 'Buku berhasil ditambahkan',
            //     data: results
            // });
            sendResponse(res, true, 'Penulis berhasil ditambahkan', results, 200);

            connection.release();
        });
    });

};


const editAuthor = (req, res) => {
    const {id} = req.params;

    const dataPenulis = {
        nama: req.body.nama,
    }

    const query = `UPDATE penulis SET ? WHERE id = ${id} ;`;

    pool.getConnection((err, connection) => {
        if(err) throw err;

        connection.query(query, [dataPenulis], (err, results) => {
            if(err) throw err;

            if(results.affectedRows < 1){
                sendResponse(res, false, 'Penulis tidak ditemukan', null, 404);
                return;
            }
            sendResponse(res, true, 'Penulis berhasil diedit', results, 200);
        });

        connection.release();

    });

};

const deleteAuthor = (req, res) => {
    const { id } = req.params;

    const query = `DELETE FROM penulis WHERE id = ${id} ;`;

    pool.getConnection((err, connection) => {
        if(err) throw err;

        connection.query(query, (err, results) => {
            if(err) throw err;

            if(results.affectedRows < 1){
                sendResponse(res, false, 'Penulis tidak ditemukan', null, 404);
                return;
            }
            sendResponse(res, true, 'Penulis berhasil dihapus', results, 200);
        });
    })

};

const sendResponse = (res, success, message, data, statusCode) => res.status(statusCode).json({
    success: success,
    message: message,
    data: data
});

module.exports = {
    getAuthors, getAuthor, addAuthor,
    editAuthor, deleteAuthor,
}

