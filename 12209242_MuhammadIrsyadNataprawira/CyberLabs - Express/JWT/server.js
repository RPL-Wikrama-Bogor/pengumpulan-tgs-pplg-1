const express = require("express");
const app = express();

const middleware = (req, res, next) => {
	if(req.query.via == "token") {
		next()
	} else {
		res.send("dilarang...")
	}
}

app.use(middleware)

app.get("/api", (req, res) => {
	res.send("hi saya olivia")
})

app.get("/mamah", (req, res) => {
	res.send("ini mamah")
})

app.listen(80, () => console.log("Server starting..."))
