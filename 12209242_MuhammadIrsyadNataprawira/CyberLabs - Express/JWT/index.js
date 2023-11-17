const express = require('express')
const bodyParser = require('body-parser')
const jwt = require('jsonwebtoken')
const app = express()


app.use(bodyParser.json());

function verify(req, res, next) {
	const token = req.headers['authorization']
	if (!token) return res.status(403).send('Forbidden...')

	jwt.verify(token, 'secretkey', (err, use) => {
		if (err) return res.status(401).send('Invalid token.');
		req.user = user
		next()
	})
}

app.get('/api/public', (req, res) => {
	res.json({ message: 'Rute public tanpa auth' })
})

app.get('/api/private', (req, res) => {
	res.json({ message: 'Rute pribadi dengan auth JWT', user: req.user })
})

app.post('/api/login', (req, res) => {
	const user = { id: 1, username: 'user123' };
	jwt.sign(user, 'secretkey', (err, token) => {
		res.json({token})
	})
})

app.listen(80, () => {
	console.log(`Server running at port 80`)
})
