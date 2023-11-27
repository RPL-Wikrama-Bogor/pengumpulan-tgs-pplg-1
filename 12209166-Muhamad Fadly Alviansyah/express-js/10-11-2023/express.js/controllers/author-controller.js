const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
  console.log('pool error');
  console.log(error);
})

const getAuthors = (req, res) => {
  const {id, nama} = req.query;
  let query = 'SELECT * FROM authors;';
  if (nama != null || id != null) {
    query = `SELECT * FROM authors WHERE nama LIKE '%${nama}%' OR id LIKE '%${id}%';`;
  }
  pool.getConnection((error, connection) => {
    if (error) throw error;
    connection.query(query, (error, results) => {
      if(error) throw error;
      sendResponse(res, true, 'Berhasil mengambil list penulis', results, 200);
    });
    connection.release();
  });  
};

const getAuthor = (req, res) => {
  const {id} = req.params;
  const query = `SELECT * FROM authors WHERE id=${id};`;
  pool.getConnection((error, connection) => {
    if (error) throw error;
    connection.query(query, (error, results) => {
      if(error) throw error;
      if(results.length < 1) {
        sendResponse(res, false, 'Penulis tidak ditemukan', null, 404);
        return;
      }
      sendResponse(res, true, 'Berhasil mengambil penulis', results, 200);
      connection.release();
    });
  }); 
};

const addAuthor = (req, res) => {
  const dataPenulis = {nama: req.body.nama};
  const query = 'INSERT INTO authors SET ? ;';
  pool.getConnection((error, connection) => {
    if (error) throw error;
    connection.query(query, [dataPenulis], (error, results) => {
      if (error) throw error;
      sendResponse(res, true, 'Penulis berhasil ditambahkan', results, 200);
    });
    connection.release();
  });
};

const editAuthor = (req, res) => {
  const { id } = req.params;
  const dataPenulis = {nama: req.body.nama}
  const query = `UPDATE authors SET ? WHERE id = ?;`;
  pool.getConnection((error, connection) => {
    if (error) throw error;
    connection.query(query, [dataPenulis, id], (error, results) => {
      if (error) throw error;
      if(results.affectedRows < 1) {
        sendResponse(res, false, 'Penulis tidak ditemukan', null, 404);
        return;
      }
      sendResponse(res, true, 'Penulis berhasil diedit', results, 200);
    });

    connection.release();
  });
};

const deleteAuthor = (req, res) => {
  const {id} = req.params;
  const query = `DELETE FROM authors WHERE id = ${id};`;
  pool.getConnection((error, connection) => {
    if (error) throw error;
    connection.query(query, (error, results) => {
      if (error) throw error;
      if (results.affectedRows < 1) {
        sendResponse(res, false, 'Penulis tidak ditemukan', null, 404);
        return;
      } 
      sendResponse(res, true, 'Penulis berhasil dihapus', results, 200);
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
  getAuthors, getAuthor, addAuthor, editAuthor, deleteAuthor
}