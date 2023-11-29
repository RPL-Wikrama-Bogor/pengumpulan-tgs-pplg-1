const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);
pool.on('error', (error) => {
    console.log(error);
})


const getPenuliss = (req, res) => {
    const { nama } = req.query;
    
    

    const{ sortBy, ascDesc } = req.query;

    let query = 'SELECT * FROM penulis;';

    if (sortBy != null) {
        const newAscDesc = (ascDesc != null) ? ascDesc : 'ASC';

        let query = `SELECT * FROM penulis ORDER BY '${sortBy} ${newAscDesc}';`;

    }

    if (nama != null) {
        query = `SELECT * FROM penulis WHERE nama LIKE'%${nama}%';`;
    }
    





    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {
            if (error) throw error;
            res.json({
                success: true,
                message: 'Berhasil mengambil list penulis',
                data: results
            });
            connection.release();
        })
    });

};
const getPenulis = (req, res) => {
    const { id } = req.params;

    const query = `SELECT * FROM penulis WHERE id = '${id}';`;

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {
            if (error) throw error;

            if (results.length < 1) {
                res.status(404).json({
                    success: false,
                    message: "penulis tidak ditemukan",
                });
                return
            }

            res.json({
                success: true,
                message: 'Berhasil mengambil id penulis',
                data: results
            });
            
            connection.release();
        })
    });
};
const addPenulis = (req, res) => {
    //id, nama, penulis, penerbit, halaman, tahun

    const dataPenulis = {
        nama: req.body.nama,
        
    }

    const query = 'INSERT INTO penulis SET ? ;';

    pool.getConnection((error, connection) => {
        if (error) throw error;


        connection.query(query, [dataPenulis], (error, results) => {
            if (error) throw error;

            sendResponse(res, true, 'Penulis Berhasil ditambahkan', results, 200)
            
            connection.release();
        });
    });
};
const editPenulis = (req, res) => {
    const {id} = req.params;
    const dataPenulis = {
        nama: req.body.nama,
        
    };

    const query = `UPDATE penulis SET ? WHERE id= '${id}' ;`;
    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [dataPenulis], (err, results) => {
            if (results.affectedRows < 1) {
                sendResponse(res, false, "Data  tidak ditemukan", null, 404);
                return;
            }
            sendResponse(res, true, 'Penulis berhasil diedit', results, 200);
        })
        connection.release();
    })

};
const deletePenulis = (req, res) => {
    const {id} = req.params;
    const dataPenulis = {
        nama: req.body.nama,
        
    };

    const query = `DELETE FROM penulis WHERE id= '${id}' ;`;
    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [dataPenulis], (err, results) => {
            if (results.affectedRows < 1) {
                sendResponse(res, false, "Data tidak ditemukan", null, 404);
                return;
            }
            sendResponse(res, true, 'Penulis berhasil dihapus', results, 200);
        })
        connection.release();
    })

};

const sendResponse = (res, success, message, data, statusCode) => res.status(statusCode).json({
    success: success,
    message: message,
    data: data,
});

module.exports = {
    getPenuliss, getPenulis,
    addPenulis, editPenulis,
    deletePenulis
}