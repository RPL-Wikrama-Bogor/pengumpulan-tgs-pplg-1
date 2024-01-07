const express = require('express')
const router = express.Router()
const bookController = require('../controller/book-controller')

router.get('/', bookController.getBooks)
router.get('/:id', bookController.getBook)
router.post('/', bookController.addBook)
router.put('/:id', bookController.editBook)
router.delete('/:id', bookController.deleteBook)

// router.post('/', (req, res) => {
//     res.send('POST Book code')
// })
// router.put('/', (req, res) => {
//     res.send('PUT Book code')
// })
// router.delete('/', (req, res) => {
//     res.send('DELETE Book code')
// })
module.exports = router