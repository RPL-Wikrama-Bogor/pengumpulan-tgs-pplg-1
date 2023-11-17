const dbConfig = require('../config/db-config');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (error) => {
    console.log(error);
});

// Filter & Sort
const getAuthors = (req, res) => {
    const {id} = req.params;
    const query = `SELECT * FROM authors ; `;
    
    // const { nama, tahun } = req.query;

    // // SORTBY  & ascDesc
    // const { sortBy, order } = req.query;

    // let query = 'SELECT * FROM authogetAuthors;';
    
    // // Sort By Tahun / Halaman
    // if (sortBy != null) {
    //     console.log(order);

    //     // const newAscDesc = (ascDesc != null) ? ascDesc : 'ASC';
    //     let query = `SELECT * FROM authogetAuthors ORDER BY ${sortBy} ${order} ;`;
    //     console.log(query);
    // }



    // if(tahun != null){
    //     query = `SELECT * FROM authogetAuthors WHERE tahun LIKE '${tahun}%' ORDER BY tahun;`;
    // }

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, (error, results) => {
            if(error) throw error;

            // res.json({
            //     succes: true,
            //     message: 'Berhasil mengambil list Buku',
            //     data: results
            // });
            sendResponse(res, true, 'Berhasil mengambil list author', results, 200);

            connection.release();

        });
    });
};
const getAuthor = (req, res) => {
    const {id} = req.params;
    const query = `SELECT * FROM authors WHERE id= ${id} ; `;

    pool.getConnection((error, connection) => {
        if (error) throw error;

        
        connection.query(query, (error, results) => {
            if(error) throw error;
            
            if(results.length < 1){
                // res.status(404).json({
                //     succes: false,
                //     message: "Buku tidak di temukan",
                // });
                sendResponse(res, false, 'Author tidak di temukan', null, 404);
                return;
            }
            // res.json({
                //     succes: true,
                //     message: 'Berhasil mengambil Buku',
                //     data: results
                // });
            sendResponse(res, true, 'Berhasil mengambil author', results, 200);
                
            connection.release();

        });
    });
};
const addAuthor = (req, res) => {
    // id, nama, penulis, penerbit, halaman, tahun
    const dataAuthor = {
        nama: req.body.nama,
    }
    // tanda tanya = Prepared Statement (memasuki data)
    const query = 'INSERT INTO authors SET ? ;';

    pool.getConnection((error, connection) => {
        if (error) throw error;

        connection.query(query, [dataAuthor], (error, results) => {
            if (error) throw error;

            // mengirim data sebagai json
            // res.json({ 
            //     success: true,
            //     message: 'Buku berhasil ditambahkan',
            //     data: results
            // }); 
            sendResponse(res, true, 'Author berhasil ditambahkan', results, 200);

            connection.release();
        });
    });
};

const editAuthor = (req, res) => {
    const { id } = req.params;
    const dataAuthor = {
        nama: req.body.nama,
    };

    const query = `UPDATE authors SET ? WHERE id = ${id};`;

    pool.getConnection((err, connection) => {
        if(err) throw err;

        connection.query(query, [dataAuthor], (err, results) => {
            if(err) throw err;
            if(results.affectedRows < 1){
                sendResponse(res, false, 'Author tidak di temukan', null, 404);
                return;
            }

            sendResponse(res, true, 'Author berhasil di edit', results, 200);
        });

        connection.release();
    });
};
const deleteAuthor = (req, res) => {
    const { id } = req.params;

    const query = `DELETE FROM authors WHERE id = ${id};`;

    pool.getConnection((err, connection) => {
        if(err) throw err;

        connection.query(query, (err, results) => {
            if(err) throw err;
            if(results.affectedRows < 1){
                sendResponse(res, false, 'Author tidak di temukan', null, 404);
                return;
            }

            sendResponse(res, true, 'Author berhasil di hapus', results, 200);
        });

        connection.release();
    });
};

const sendResponse = (res, succes, message, data, statusCode) => {
    res.status(statusCode).json({
        succes: succes,
        message: message,
        data: data,
    });
}

module.exports = {
    getAuthors, getAuthor, addAuthor, editAuthor, deleteAuthor
}