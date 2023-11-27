const express = require('express');
const authorController = require('../controllers/auth-controller');

const router = express.Router();

router.post('/register', authorController.register);

module.exports = router;