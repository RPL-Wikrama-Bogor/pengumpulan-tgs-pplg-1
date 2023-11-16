const dbConfig = require ('../config/db-config.js');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (err) => {
    console.log(err)
})

const getBooks = (req, res ) => {
    let query = `SELECT * FROM books;`;
    let sortBy = req.query.sortBy;
    let nama = req.query.nama;

    if(sortBy){
        query = `SELECT * FROM books ORDER BY halaman ${sortBy}`
    }
    else if(nama){
        query = `SELECT * FROM books WHERE nama LIKE '%${nama}%'`
    }
    pool.query(query, (err, result) => {
        if (err) {
            res.send(err)
        } else {
            res.json({
                success: true,
                message: 'Books fetched successfully',
                data: result,
            })
        }
    })
}


const getBook = (req, res) => {
    const id = req.params.id;
    const query = `SELECT * FROM books WHERE id = ?`;
        pool.query(query, [id], (err, result) => {
            if (err) {
                res.send(err);
            } else {
                res.json({
                    success: true,
                    message: 'Book fetched successfully',
                    data: result,
                });
            }
        })
    
};


const addBook = (req, res) => {
    const dataBook = {
        nama: req.body.nama,
        penulis: req.body.penulis,
        penerbit: req.body.penerbit,
        tahun: req.body.tahun,
        halaman: req.body.halaman,
    }

    const query = `INSERT INTO books SET ? ;`;

    pool.query(query, [dataBook], (err, result) => {
        if (err) {
            res.send(err)
        } else {
            res.json({
                success: true,
                message: 'Book added successfully',
                data: result,
            })
        }
    })
}

const editBook = (req, res) => {
    const id = req.params.id;
    const dataBook = {
        nama: req.body.nama,
        penulis: req.body.penulis,
        penerbit: req.body.penerbit,
        tahun: req.body.tahun,
        halaman: req.body.halaman,
    }

    const query = `UPDATE books SET ? WHERE id = ? ;`;

    pool.query(query, [dataBook, id], (err, result) => {
        if (err) {
            res.send(err)
        } else {
            res.json({
                success: true,
                message: 'Book updated successfully',
                data: result,
            })
        }
    })
}

const deleteBook = (req, res) => {
    const id = req.params.id;
    const query = `DELETE FROM books WHERE id = ? ;`;

    pool.query(query, [id], (err, result) => {
        if (err) {
            res.send(err)
        } else {
            res.json({
                success: true,
                message: 'Book deleted successfully',
                data: result,
            })
        }
    })
}

module.exports = {
    getBooks, getBook, addBook, editBook, deleteBook
}
