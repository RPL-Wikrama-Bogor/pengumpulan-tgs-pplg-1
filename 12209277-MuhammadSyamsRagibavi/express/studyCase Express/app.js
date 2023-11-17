const express = require('express');
const app = express();
app.use(express.json());
const studentRoute = require('./routes/routeStudents');
const userRoute = require('./routes/routeUsers')
const jwt = require('jsonwebtoken')
const accessToken = '123456789'
const PORT = 6969

app.use(express.urlencoded({
    extended: true
}))

const authenticatedJWT = (req, res, next) => {
    const authHeader = req.headers['authorization']
    if(!authHeader){
        return res.sendStatus(401).json({
            message: 'Unauthorized'
        })
    }
    const token = authHeader && authHeader.split(' ')[1]

    jwt.verify(token, accessToken, (err, decoded) => {
        if(err){
            return res.sendStatus(403).json({
                message: 'Forbidden'
            })
        }
        next()
    })

}

app.get('/', (req, res) => {
    res.send('Hello World!');
});

app.use('/student',authenticatedJWT, studentRoute);
app.use('/user', userRoute);

app.listen(PORT, () => {
    console.log(`Server running on http://localhost:${PORT}`);
})
