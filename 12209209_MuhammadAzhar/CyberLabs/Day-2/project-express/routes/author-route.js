const express = require('express')
const router = express.Router()
const bookController = require('../controller/author-controller')

router.get('/', bookController.getAuthors)
router.get('/:id', bookController.getAuthor)
router.post('/', bookController.addAuthor)
router.put('/:id', bookController.editAuthor)
router.delete('/:id', bookController.deleteAuthor)
// router.get('/', (req, res) => {
// //     res.send('GET Author code')
// })
// router.post('/', (req, res) => {
//     res.send('POST Author code')
// })
// router.put('/', (req, res) => {
//     res.send('PUT Author code')
// })
// router.delete('/', (req, res) => {
//     res.send('DELETE Author code')
// })
module.exports = router