const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
  console.log('pool error');
  console.log(error);
})

const getBooks = (req, res) => {
  const query = 'SELECT * FROM books;';

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
        // res.status(404).json({
        //   success: false,
        //   massage: 'Buku tidak ditemukan'
        // });
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

};

const deleteBook = (req, res) => {

};

const sendResponse = (res, success, massage, data, statusCode) => res.status(statusCode).json({
  success: success,
  massage: massage,
  data: data
});

module.exports = {
  getBooks, getBook, addBook, editBook, deleteBook
}