const express = require('express');
const penulisController = require('../controllers/penulis-controller');
const router = express.Router();

router.get('/', penulisController.getPenuliss);
router.get('/:id', penulisController.getPenulis);
router.post('/', penulisController.addPenulis);
router.put('/:id',penulisController.editPenulis);
router.delete('/:id', penulisController.deletePenulis);

module.exports = router;