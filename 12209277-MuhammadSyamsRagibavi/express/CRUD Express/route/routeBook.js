const express = require('express')
const router = express.Router()
const {addBook, getBooks, deleteBook, getBook, editBook} = require('../controllers/controller')

router.use(express.json());

router.get('/', getBooks);
router.get('/:id', getBook);
router.post('/', addBook);
router.put('/:id', editBook);
router.delete('/:id', deleteBook);

module.exports = router;