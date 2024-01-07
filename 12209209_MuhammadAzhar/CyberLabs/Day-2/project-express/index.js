const express = require('express')
const bookRouter = require('./routes/book-route')
const authorRouter = require('./routes/author-route')
const authRouter = require('./routes/auth-route')
const jwt = require('jsonwebtoken')
const accesTokenSecret = '2023-wikramA-exp'

const app = express()
app.use(express.json())
app.use(
    express.urlencoded({
        extended: true,
    })
)

const authenticateJWT = (req, res, next) => {
    const authHeader = req.header.authorization

    if (authHeader) {
        return res.status(403).json({message: 'Unauthorized'})
    }

    const token = authHeader.split(' ')[1]

    jwt.verify(token, accesTokenSecret, (err, user) => {
        if(err){
        return res.status(403).json({ message: 'Unauthorized' })
        }

        next()
    })
}

const PORT = 4000

app.use('/book', authenticateJWT, bookRouter)
app.use('/author', authorRouter)
app.use('/auth', authRouter)

app.get('/book/:id/:bookname/:year', (req, res) => {
    res.send(req.params)
})
app.get('/filter', (req, res) => {
    res.send(req.query)
})

// app.get('/', (req, res) => res.send('Hello World'))
// app.get('/', (req, res) => res.send('Hello World'))
// app.get('/', (req, res) => res.send('Hello World'))

app.listen(PORT, () => console.log(`Server ini berjalan di http://localhost:${PORT}`))  