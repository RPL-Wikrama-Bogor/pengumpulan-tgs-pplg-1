const express = require('express')
const penulisController = require('../controllers/penulis-controller');

const router = express.Router();

router.get('/' , penulisController.getBooks);
router.get('/:id' ,penulisController.getBook);
router.post('/', penulisController.addBook);
router.put('/:id' , penulisController.editBook);
router.delete('/:id', penulisController.deleteBook);

module.exports = router;
