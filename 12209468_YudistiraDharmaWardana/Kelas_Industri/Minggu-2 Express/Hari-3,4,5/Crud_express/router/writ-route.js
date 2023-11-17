const express = require('express');
const router = express.Router();
const writController = require('../controller/writ-controller');

router.post('/register', writController.register);
router.post('/login', writController.login);

module.exports = router;