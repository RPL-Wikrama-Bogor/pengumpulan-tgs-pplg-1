const express = require('express');
const router = express.Router();
const bookControllers = require('../controller/book-controller');

router.get('/', bookControllers.getBooks);
router.get('/:id', bookControllers.getBook);
router.post('/', bookControllers.addBooks);
router.put('/:id', bookControllers.editBooks);
router.delete('/:id', bookControllers.deleteBooks);

module.exports = router;
