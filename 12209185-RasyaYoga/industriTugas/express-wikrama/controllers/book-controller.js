const dbConfig = require('../config/db-config');
const mysql = require ('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
});

const getBooks = (req, res) =>
{
    // const { tahun } = req.query;

    //sort & ascDesc

    const { sortBy,  } = req.query;

    let query = 'SELECT * FROM books;';
    // if (nama != null){
    //     query = `SELECT * FROM books WHERE nama LIKE '%${nama}%' ;` ;
    // }
    if (sortBy != null){
        console.log(order);
        const newAscDesc = (ascDesc != null )? ascDesc : 'ASC';
        let query = `SELECT * FROM books ORDER BY ${sortBy} ${order};` ;
        console.log(query);
    }

    pool.getConnection((error, connection) =>{
        if (error) throw error;

        connection.query(query, (error, results)=> {
            if (error) throw error;
            // res.json({
            //     success: true,
            //     massage: 'Berhasil mengambil list buku',
            //     data: results

            // });
            sendResponse(res, true, 'Berhasil mengambil list buku', results, 200);
            connection.release();
        });

    });
};
const getBook = (req, res) => 
{
    const id = req.params.id;
    const  query = `SELECT * FROM books WHERE id = ${id} ;`;

    pool.getConnection((error, connection) =>{
        if (error) throw error;

        connection.query(query, (error, results)=> {
            if (error) throw error;

            if (results.length < 1) {
                sendResponse(res, false, 'Buku tidak ditemukan', null, 404);
                return;
            }

            // if (results.length < 1 ){
            //     res.status(404).json({
            //         success: false,
            //         message: 'Buku tidak ditemukan',
            //     });
            //     return;
            // }
            // res.json({
            //     success: true,
            //     massage: 'Berhasil mengambil list buku',
            //     data: results

            // });
            sendResponse(res, true, 'Berhasil mengambil list Buku', results, 200);
            connection.release();
        });

    });
};
const addBook = (req, res) => 
{
    //id, nama, penulis, penerbit, tahun, halaman

    const dataBuku = {
        nama: req.body.nama,
        penulis: req.body.penulis,
        penerbit: req.body.penerbit,
        tahun: req.body.tahun,
        halaman: req.body.halaman,
      
    }
    // prepared statement
    const query = 'INSERT INTO books SET ?';

    pool.getConnection((error, connection)=> {
        if (error) throw error;

        connection.query(query, [dataBuku], (error, results) => {
            if (error) throw error;

            // res.json({
            //     success: true,
            //     message: 'Buku berhasil ditambahkan',
            //     data: results
            // });
            sendResponse(res, true, 'Buku berhasil ditambahkan', results, 200 );
            connection.release();
            
        });
    });
};
const editBook = (req, res) => 
{
    const { id } = req.params;

    const dataBuku ={
        nama: req.body.nama,
        penulis: req.body.penulis,
        penerbit: req.body.penerbit,
        tahun: req.body.tahun,
        halaman: req.body.halaman,
    };
    const query = `UPDATE books SET ? WHERE id = ${id} ;`;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, [dataBuku], (err, results) => {
            if (err) throw err;
            if (results.affectedRows < 1) {
                sendResponse(res, false, 'Buku tidak ditemukan', null, 404);
                return;
            }
            sendResponse(res, true, 'Buku berhasil diedit', results, 200);
            connection.release();
        });
    });

};
const deleteBook = (req, res) => 
{
    const { id } = req.params;
    const query = `DELETE FROM books WHERE id = ${id}`;

    pool.getConnection((err, connection)=> {
        if (err) throw err;

        connection.query(query,(err, results) =>{
            if (err) throw err;

            if (results.affectedRows < 1){
                sendResponse(res, false, 'Buku tidak ditemukan', null, 404);
                return;
            }

            sendResponse(res, true, 'Buku berhasil dihapus', results, 200);
        });

    });
};

const sendResponse = (res, success, message, data, statusCode) => res.status(statusCode).json({
                success: success,
                massage: message,
                data: data

});

module.exports = {
    getBooks, getBook, addBook, editBook, deleteBook
}

