const express = require('express')
const bookController = require('../controllers/book-controller');

const router = express.Router();




router.get('/' , bookController.getBooks);
router.get('/:id' ,bookController.getBook);
router.post('/', bookController.addBooks);
router.put('/:id' , bookController.editBooks);
router.delete('/:id', bookController.deleteBooks);

module.exports = router;