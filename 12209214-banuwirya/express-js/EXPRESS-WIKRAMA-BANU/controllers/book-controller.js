const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);
pool.on('error', (error) => {
    console.log(error);
})


const getBooks = (req, res) => {
    const { nama } = req.query;
    const { penulis } = req.query;
    const { penerbit } = req.query;
    const { tahun } = req.query;
    const { halaman } = req.query;

    const{ sortBy, ascDesc } = req.query;

    let query = 'SELECT * FROM books;';

    if (sortBy != null) {
        const newAscDesc = (ascDesc != null) ? ascDesc : 'ASC';

        let query = `SELECT * FROM books ORDER BY '${sortBy} ${newAscDesc}';`;

    }

    if (nama != null) {
        query = `SELECT * FROM books WHERE nama LIKE'%${nama}%';`;
    }
    if (penulis != null) {
        query = `SELECT * FROM books WHERE penulis LIKE'%${penulis}%';`;
    }
    if (penerbit != null) {
        query = `SELECT * FROM books WHERE penerbit LIKE'%${penerbit}%';`;
    }
    if (tahun != null) {
        query = `SELECT * FROM books WHERE tahun LIKE'%${tahun}%';`;
    }
    if (halaman != null) {
        query = `SELECT * FROM books WHERE halaman LIKE'%${halaman}%';`;
    }





    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {
            if (error) throw error;
            res.json({
                success: true,
                message: 'Berhasil mengambil list buku',
                data: results
            });
            connection.release();
        })
    });

};
const getBook = (req, res) => {
    const { id } = req.params;

    const query = `SELECT * FROM books WHERE id = '${id}';`;

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {
            if (error) throw error;

            if (results.length < 1) {
                res.status(404).json({
                    success: false,
                    message: "Buku tidak ditemukan",
                });
                return
            }

            res.json({
                success: true,
                message: 'Berhasil mengambil id buku',
                data: results
            });
            
            connection.release();
        })
    });
};
const addBook = (req, res) => {
    //id, nama, penulis, penerbit, halaman, tahun

    const dataBuku = {
        nama: req.body.nama,
        penulis: req.body.penulis,
        penerbit: req.body.penerbit,
        tahun: req.body.tahun,
        halaman: req.body.halaman
    }

    const query = 'INSERT INTO books SET ? ;';

    pool.getConnection((error, connection) => {
        if (error) throw error;


        connection.query(query, [dataBuku], (error, results) => {
            if (error) throw error;

            sendResponse(res, true, 'Buku Berhasil ditambahkan', results, 200)
            
            connection.release();
        });
    });
};
const editBook = (req, res) => {
    const {id} = req.params;
    const dataBuku = {
        nama: req.body.nama,
        penulis: req.body.penulis,
        penerbit: req.body.penerbit,
        tahun: req.body.tahun,
        halaman: req.body.halaman
    };

    const query = `UPDATE books SET ? WHERE id= '${id}' ;`;
    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [dataBuku], (err, results) => {
            if (results.affectedRows < 1) {
                sendResponse(res, false, "Data  tidak ditemukan", null, 404);
                return;
            }
            sendResponse(res, true, 'Buku berhasil diedit', results, 200);
        })
        connection.release();
    })

};
const deleteBook = (req, res) => {
    const {id} = req.params;
    const dataBuku = {
        nama: req.body.nama,
        penulis: req.body.penulis,
        penerbit: req.body.penerbit,
        tahun: req.body.tahun,
        halaman: req.body.halaman
    };

    const query = `DELETE FROM books WHERE id= '${id}' ;`;
    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [dataBuku], (err, results) => {
            if (results.affectedRows < 1) {
                sendResponse(res, false, "Data tidak ditemukan", null, 404);
                return;
            }
            sendResponse(res, true, 'Buku berhasil dihapus', results, 200);
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
    getBooks, getBook,
    addBook, editBook,
    deleteBook
}