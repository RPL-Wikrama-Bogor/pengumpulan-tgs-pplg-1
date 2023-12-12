const express = require('express')
const bookRouter= require('./routes/book-route') // . memanggil folder atau file yang dibuat oleh kita, 
const authorRouter= require('./routes/author-route')
const authRouter= require('./routes/auth-route')
const jwt = require('jsonwebtoken') // kalau tidak ada berarti memanggil package yang ada di node modules
const cors = require('cors')
const accesTokenSecret = '2023-wikramA-exp'

const app = express() // untuk menjalankan project express
app.use(express.json()) // data yang bisa dikirim hanya json saja kepanjangan json JavaScript Object Notation 
app.use(
    express.urlencoded({ // mengubah req dari url menjadi tipe format json
        extended: true,
    })
)

app.use(cors())

const authenticateJWT = (req, res, next) => {
    const authHeader = req.headers.authorization

    if (!authHeader){
        return res.status(403).json({message: 'Unauthorized'})
    }
    const token = authHeader.split(' ')[1]

    jwt.verify(token, accesTokenSecret, (err, user) =>{
        if(err){
            return res.status(403).json({ message:'Unauthorized' })
        }
        next()
    })
}

const PORT = 2000

app.use ('/book', bookRouter)
app.use ('/author', authorRouter)
app.use ('/auth', authRouter)

app.get('/book/:id/:bookname/:year', (req, res) => {
    res.send(req.params)
})

app.get('/filter', (req, res) => {
    res.send(req.query)
})

// app.get('/', (req, res) => res.send('Hello World'))

// app.get('/', (req, res) => res.send('Hello Wikrama'))

// app.get('/', (req, res) => res.send('Hello about wikrama'))

app.listen(PORT, () =>
 console.log(`Server ini berjalan di http://localhost:${PORT}`))