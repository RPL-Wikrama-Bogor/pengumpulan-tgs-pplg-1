const express = require('express');
const dataController = require('../controllers/data-controller');

const router = express.Router();

router.get('/', dataController.getDatas);
router.get('/:id', dataController.getData);
router.post('/', dataController.addDatas); 
router.put('/:id' , dataController.editDatas);
router.delete('/:id', dataController.deleteDatas);

module.exports = router;