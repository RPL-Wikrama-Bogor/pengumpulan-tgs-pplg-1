const express = require('express')
const router = express.Router();
const {addAuthor, getAuthors, deleteAuthor, getAuthor, editAuthor} = require('../controllers/controllerAuthor')

router.use(express.json());

router.get('/', getAuthors);
router.get('/:id', getAuthor);
router.post('/', addAuthor);
router.put('/:id', editAuthor);
router.delete('/:id', deleteAuthor);

module.exports = router;