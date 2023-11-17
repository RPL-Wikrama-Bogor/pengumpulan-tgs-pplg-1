const express = require('express');
const router = express.Router();
const writerController = require('../controller/writer-controller')

router.get('/',writerController.getWriters);
router.get('/:id',writerController.getWriter);
router.post('/', writerController.addWriters);
router.put('/:id', writerController.editWriters);
router.delete('/:id', writerController.deleteWriters);

module.exports = router;
