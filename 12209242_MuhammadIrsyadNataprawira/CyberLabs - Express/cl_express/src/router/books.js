const express = require('express');
const db = require('../connection/connection');
const response = require('../utils/response');

const router = express.Router();

router.get('/', (req, res) => {
    const { sort, order } = req.query;
    let query = 'SELECT * FROM books';

    if ( sort != null ) {
        query = `SELECT * FROM books ORDER BY ${sort} ${order}`
    }
    
    db.query(query, (err, result) => {
        if (err) {
            console.error(err.message);
            res.status(500).send('Error getting books data');
        } else {
            // console.log(result);
            response(200, result, "Success getting books data", res);
        }
    });
});

router.get('/:id', (req, res) => {
    const  id  = req.params.id;
    const query = `SELECT * FROM books WHERE id = ${id}`
    db.query(query, (err, result) => {
        if ( err ) {
            console.error(err.message);
            res.status(err.code).send('Error getting books specific data')
        } else {
            if ( result.length === 0 ) {
                res.status(404).send("No books found with id " + id)
            } else {
                response(200, result, "Success getting books specific data", res)
            }
        }
    });
});

router.post('/', (req, res) => {
    const book = req.body;
    const dataBook = {
        nama: book.nama,
        penulis: book.penulis,
        penerbit: book.penerbit,
        tahun: book.tahun,
        halaman: book.halaman,
    }
    const query = "INSERT INTO books SET ?"
    db.query(query, dataBook, (err, result) => {
        if (err) {
            console.error(err.message);
            res.status(404).send('Error creating books row');
        } else {
            response(201, result, "Success creating books data", res);
        }
    });
});

router.put('/:id', (req, res) => {
    const id = req.params.id;
    const newBook = req.body;
    const newDataBook = {
        nama: newBook.nama,
        penulis: newBook.penulis,
        penerbit: newBook.penerbit,
        tahun: newBook.tahun,
        halaman: newBook.halaman,
    }
    const query = `UPDATE books SET ? WHERE id = ${id}`;
    db.query(query, newDataBook, (err, result) => {
        if (err) {
            console.error(err.message);
            res.status(500).send('Error updating books data');
        } else {
            if ( result.affectedRows < 1 ) {
                res.status(404).send("Can't edited books undefined id " + id)
            } else {
                response(201, result, "Success updating books data with id " + id, res);
            }
        }
    });
});

router.delete('/:id', (req, res) => {
    const id = req.params.id;
    const query = `DELETE FROM books WHERE id = ${id}`;
    db.query(query, (err, result) => {
        if ( err ) {
            console.error(err.message);
        } else {
            if ( result.affectedRows < 1 ) {
                res.status(404).send('Error deleting books data with id: ' + id);
            } else {
                response(200, result, "Success deleting books data with id " + id, res);
            }
        }
    });
});

module.exports = router;