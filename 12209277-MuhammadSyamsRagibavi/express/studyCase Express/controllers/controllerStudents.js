const dbConfig = require('../config/dbConfig');
const mysql = require('mysql2');
const pool = mysql.createPool(dbConfig);

pool.on('error', (err) => {
    console.log(err)
})


const getStudents = (req, res) => {
    const query = "SELECT * FROM student";
    
    pool.query(query, (err, result) => {
        if (err) {
            console.log(err);
        } else {
            res.json(result);
        }
    })

}

const getStudent = (req, res) => {
    const query = "SELECT * FROM student WHERE id = ?";
    const id = req.params.id;

    pool.query(query, [id], (err, result) => {
        if(err){
            console.log(err)
        }else{
            res.json(result);
        }
    })
}

const addStudent = (req, res) => {
    
    const query = "INSERT INTO student SET ?";

    const data = {
        name: req.body.name,
        nis: req.body.nis,
        rombel: req.body.rombel,
        rayon: req.body.rayon
    }

    pool.query(query, [data], (err, result) => {
        if (err) {
            console.log(err);
        } else {
            res.json({
                message: "Student added successfully"
            })
        }
    })
}

const editStudent = (req, res) => {
    const id = req.params.id;

    const data = {
        name: req.body.name,
        nis: req.body.nis,
        rombel: req.body.rombel,
        rayon: req.body.rayon
    }

    const query = "UPDATE student SET ? WHERE id = ?";

    pool.query(query, [data, id], (err, result) =>{
        if (err) {
            console.log(err);
        } else {
            res.json({
                message: "Student updated successfully"
            })
        }
    })
}

const destroyStudent = (req, res) => {
    const id = req.params.id

    const query = "DELETE FROM student WHERE id = ?";

    pool.query(query, [id], (err, result) => {
        if (err) {
            console.log(err);
        } else {
            res.json({
                message: "Student deleted successfully"
            })
        }
    })
}

module.exports = {
    getStudents, addStudent, getStudent, editStudent, destroyStudent
}