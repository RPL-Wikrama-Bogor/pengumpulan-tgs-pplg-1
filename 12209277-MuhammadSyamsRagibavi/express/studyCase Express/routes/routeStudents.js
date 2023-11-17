const express = require('express')
const router = express.Router()
const {getStudents, addStudent, getStudent, editStudent, destroyStudent} = require('../controllers/controllerStudents')

router.use(express.json())

router.get('/', getStudents);
router.post('/', addStudent);
router.get('/:id', getStudent);
router.put('/:id', editStudent);
router.delete('/:id', destroyStudent);
module.exports = router;