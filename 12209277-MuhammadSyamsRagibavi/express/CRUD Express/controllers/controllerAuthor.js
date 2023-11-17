const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (err) => {
    console.log(err)
})

const getAuthors = (req, res) => {
    const query = `SELECT * FROM author;`
    pool.query(query, (err, result) => {
        if (err) {
            res.send(err)
        } else {
            res.json({
                success: true,
                message: 'author fetched successfully',
                data: result,
            })
        }
    })
}

const getAuthor = (req, res) => {
    const id = req.params.id;
    const query = `SELECT * FROM author WHERE id = ?`;
        pool.query(query, [id], (err, result) => {
            if (err) {
                res.send(err);
            } else {
                res.json({
                    success: true,
                    message: 'Author fetched successfully',
                    data: result,
                });
            }
        })
    
};

const addAuthor = (req, res) => {
    const dataAuthor = {
        nama: req.body.nama,
    }

    const query = `INSERT INTO author SET ? ;`

    pool.query(query, [dataAuthor], (err, result) => {
        if (err) {
            res.send(err)
        } else {
            res.json({
                success: true,
                message: 'Author added successfully',
                data: result,
            })
        }
    })
}

const editAuthor = (req, res) => {
    const id = req.params.id

    const dataAuthor = {
        nama: req.body.nama,
    }

    const query = `UPDATE author SET ? WHERE id = ? ;`

    pool.query(query, [dataAuthor, id], (err, result) => {
        if (err) {
            res.send(err)
        } else {
            res.json({
                success: true,
                message: 'Author updated successfully',
                data: result,
            })
        }
    })
}

const deleteAuthor = (req, res) => {
    const id = req.params.id
    
    const query = `DELETE FROM author WHERE id = ?;`

    pool.query(query, [id], (err, result) => {
        if (err) {
            res.send(err)
        } else {
            res.json({
                success: true,
                message: 'Author deleted successfully',
                data: result,
            })
        }
    })
}

module.exports = {
    getAuthors, getAuthor, addAuthor, editAuthor, deleteAuthor
}