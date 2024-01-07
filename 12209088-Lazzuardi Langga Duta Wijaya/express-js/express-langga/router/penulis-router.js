const express = require('express');
const penulisController = require("../controllers/penulis-controller");

const router = express.Router();
// HTTP Method: GET, POST, PUT/PATCH,DELETE
router.get("/", penulisController.getSeluruhPenulis);
router.get("/:id", penulisController.getPenulis);
router.post("/", penulisController.addPenulis);
router.put("/:id", penulisController.editPenulis);
router.delete("/:id", penulisController.deletePenulis);

module.exports = router;