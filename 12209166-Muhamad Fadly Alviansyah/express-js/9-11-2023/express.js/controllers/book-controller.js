const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
  console.log('pool error');
  console.log(error);
})

const getBooks = (req, res) => {
  const {nama} = req.query;
  const {orderBy, sort} = req.query;
  

  let query = 'SELECT * FROM books;';

  if (orderBy != null) {
    query = `SELECT * FROM books ORDER BY ${orderBy} ASC;`;
    if (sort != null) {
      query = `SELECT * FROM books ORDER BY ${orderBy} ${sort};`;
    }
  }

  pool.getConnection((error, connection) => {
    if (error) throw error;

    connection.query(query, (error, results) => {
      if(error) throw error;

      sendResponse(res, true, 'Berhasil mengambil list buku', results, 200);

      connection.release();
    });
  });  
};

const getBook = (req, res) => {
  const {id} = req.params;
  const query = `SELECT * FROM books WHERE id=${id};`;

  pool.getConnection((error, connection) => {
    if (error) throw error;

    connection.query(query, (error, results) => {
      if(error) throw error;

      if(results.length < 1) {
        sendResponse(res, false, 'Buku tidak ditemukan', null, 404);
        return;
      }
      sendResponse(res, true, 'Berhasil mengambil buku', results, 200);

      connection.release();
    });
  }); 
};

const addBook = (req, res) => {
  const dataBuku = {
    nama: req.body.nama,
    penulis: req.body.penulis,
    penerbit: req.body.penerbit,
    tahun: req.body.tahun,
    halaman: req.body.halaman,
  };
  
  // *Prepare Statement
  const query = 'INSERT INTO books SET ? ;';

  pool.getConnection((error, connection) => {
    if (error) throw error;

    connection.query(query, [dataBuku], (error, results) => {
      if (error) throw error;

      sendResponse(res, true, 'Buku berhasil ditambahkan', results, 200);

      connection.release();
    });
  });
};

const editBook = (req, res) => {
  const { id } = req.params;
  const dataBuku = {
    nama: req.body.nama,
    penulis: req.body.penulis,
    penerbit: req.body.penerbit,
    tahun: req.body.tahun,
    halaman: req.body.halaman,
  };

  const query = `UPDATE books SET ? WHERE id = ?;`;

  pool.getConnection((err, connection) => {
    if (err) throw err;

    connection.query(query, [dataBuku, id], (err, results) => {
      if (err) throw err;

      if(results.affectedRows < 1) {
        sendResponse(res, false, 'Buku tidak ditemukan', null, 404);
        return;
      }

      sendResponse(res, true, 'Buku berhasil diedit', results, 200);
    });

    connection.release();
  });
};

const deleteBook = (req, res) => {
  const {id} = req.params;

  const query = `DELETE FROM books WHERE id = ${id};`;

  pool.getConnection((err, connection) => {
    if (err) throw err;

    connection.query(query, (err, results) => {
      if (err) throw err;

      if (results.affectedRows < 1) {
        sendResponse(res, false, 'Buku tidak ditemukan', null, 404);
        return;
      }

      sendResponse(res, true, 'Buku berhasil dihapus', results, 200);
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
  getBooks, getBook, addBook, editBook, deleteBook
}