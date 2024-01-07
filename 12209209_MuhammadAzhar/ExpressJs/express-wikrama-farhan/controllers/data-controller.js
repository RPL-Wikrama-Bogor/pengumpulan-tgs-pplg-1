// npm i mysql2

const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
})

//Filter and Sort
const getDatas = (req, res) => {
    // const {nama} = req.query;
    const { sortBy, order } = req.query;
    const {tahun} = req.query;
    
    let query = 'SELECT * FROM data ;';
    
    // filter
    // if (nama != null) {
    //     query = `SELECT * FROM data WHERE nama LIKE '%${nama}%' ;`;
    // }

    //sort
    if (sortBy != null) {
        query = `SELECT * FROM data ORDER BY ${sortBy} ${order};`;
        }

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {
            if (error) throw error;

            res.json({
                success: true,
                message: 'Data berhasil diambil',
                data: results
            });

            connection.release();
        })
    })
};
const getData = (req, res) => {
    const dataPerson = {
        nama: req.body.nama,
        umur: req.body.umur,
        media: req.body.media,
    }
    const { id } = req.params;

    const query = `SELECT * FROM data WHERE id = '${id}';`;

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, [dataPerson], (error, results) => {
            if (error) throw error;
            if (results.length < 1) {
                SendResponse(res, false, 'Data tidak ditemukan', results, 200)
                return;
            }

            res.json({
                success: true,
                message: 'Data berhasil ditemukan.',
                data: results
            });

            connection.release();
        });
    });
};
const addDatas = (req, res) => {
    const dataPerson = {
        nama: req.body.nama,
        umur: req.body.umur,
        media: req.body.media,
    }
    const query = 'INSERT INTO data SET ? ';

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, [dataPerson], (error, results) => {
            if (error) throw error;

            SendResponse(res, true, 'Data berhasil ditambahkan', results, 200);

            // res.json({
            //     success: true,
            //     message: 'Book successfully submitted',
            //     data: results
            // });

            connection.release();
        });
    });
};
const editDatas = (req, res) => {
    const { id } = req.params;

    const dataPerson = {
        nama: req.body.nama,
        umur: req.body.umur,
        media: req.body.media,
    };

    const query = `UPDATE data SET ? WHERE id = ${id} ;`;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [dataPerson], (err, results) => {
            if (err) throw err;

            if (results.length < 1) {
                SendResponse(res, false, 'Data tidak ditemukan', null, 404);
                return;
            }

            SendResponse(res, true, 'Data berhasil diedit', results, 200);

        });
        connection.release();

    });
};

const deleteDatas = (req, res) => {
    const { id } = req.params;

    const query = `DELETE FROM data WHERE id = ${id}`;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, (err, results) => {
            if (err) throw err;

            if (results.affectedRows < 1) {
                SendResponse(res, false, 'tidak ditemukan', null, 404);
                return;
            }

            SendResponse(res, true, 'Data berhasil dihapus', results, 200);
        })
    })
};

const SendResponse = (res, success, message, data, statusCode) => res.status(statusCode).json({
    success: success,
    message: message,
    data: data
});

module.exports = {
    getDatas,getData,addDatas,editDatas,deleteDatas
};