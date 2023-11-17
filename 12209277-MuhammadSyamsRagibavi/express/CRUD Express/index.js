const express = require('express')
const app = express()
app.use(express.json())
const bookRoute = require('./route/routeBook.js');
const authorRoute = require('./route/routeAuthor.js');
const authRoute = require('./route/routeAuth.js');
const accessToken = '123456789'
const jwt = require('jsonwebtoken')

app.use(express.urlencoded({extended: true}));

const authenticatedJWT = (req, res, next) => {
    const authHeader = req.headers.authorization

    if(!authHeader){
        return res.status(403).json({
            message: 'Unauthorized'
        })
    }

    const token = authHeader.split(' ')[1]

    jwt.verify(token, accessToken, (err, user) => {
        if(err){
            return res.status(403) .json({
                message: 'Unauthorized'
            })
        }
        next();
    })
}

app.use('/book',authenticatedJWT , bookRoute);
app.use('/author', authorRoute);
app.use('/auth', authRoute)

app.listen(6969, () => {
    console.log('Server running on port 6969')
})
