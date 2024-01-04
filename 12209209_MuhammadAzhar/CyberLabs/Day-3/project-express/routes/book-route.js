const express = require('express')
const router = express.Router() //untuk menggunakan semua router yang ada di bawah
const bookController = require('../controller/book-controller')

//router
router.get('/', bookController.getBooks)
router.post('/', bookController.addBook)
router.get('/:id', bookController.getBook)
router.put('/:id', bookController.editBook)
router.delete('/:id', bookController.deleteBook)

router.post('/', (req, res) => {
    res.send('POST book code')
})
router.put('/', (req, res) => {
    res.send('PUT book code')
})
router.delete('/', (req, res) => {
    res.send('DELETE book code')
})
module.exports = router 