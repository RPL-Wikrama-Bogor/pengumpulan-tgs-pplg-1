const express = require('express')

const router = express.Router();

const { getAuthors, getAuthor, 
        addAuthors, editAuthors, 
        deleteAuthors } = 
require('../controllers/author-controller')

router.get('/', getAuthors);
router.get('/:id', getAuthor);
router.post('/', addAuthors); // function(req,res){addAuthors;}
router.put('/:id', editAuthors);
router.delete('/:id', deleteAuthors);

module.exports = router;    