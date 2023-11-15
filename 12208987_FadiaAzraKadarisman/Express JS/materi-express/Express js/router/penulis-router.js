const express = require('express'); 
const authorController = require('../controllers/penulis-controller')
const router = express.Router();

router.get('/', authorController.getAuthors);
router.get('/:id', authorController.getAuthor);
router.post('/', authorController.addAuthor);
router.put('/:id',authorController.editAuthor);
router.delete('/:id', authorController.deleteAuthor);

module.exports = router;