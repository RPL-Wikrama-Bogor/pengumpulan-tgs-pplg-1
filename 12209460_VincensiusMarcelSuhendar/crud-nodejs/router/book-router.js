const express = require('express')

const router = express.Router();

const { getBook, getBooks, 
        addBooks, editBooks, 
        deleteBooks } = 
require('../controllers/book-controller')

router.get('/', getBooks);
router.get('/:id', getBook);
router.post('/', addBooks); // function(req,res){addBook;}
router.put('/:id', editBooks);
router.delete('/:id', deleteBooks);

module.exports = router;    