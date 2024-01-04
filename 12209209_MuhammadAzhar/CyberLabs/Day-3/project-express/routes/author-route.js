const express = require('express')
const router = express.Router() //untuk menggunakan semua router yang ada di bawah
const authorController = require('../controller/author-controller')

//router
router.get('/', authorController.getAuthors)
router.post('/', authorController.addAuthor)
router.get('/:id', authorController.getAuthor)
router.put('/:id', authorController.editAuthor)
router.delete('/:id', authorController.deleteAuthor)

router.post('/', (req, res) => {
    res.send('POST authors code')
})
router.put('/', (req, res) => {
    res.send('PUT authors code')
})
router.delete('/', (req, res) => {
    res.send('DELETE authors code')
})
module.exports = router 