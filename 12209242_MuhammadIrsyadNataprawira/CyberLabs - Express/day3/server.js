const express = require('express');
const app = express();
const port = 80;
const bodyParser = require('body-parser');
const handler = require('./utils/handler')
const response = require('./utils/response')
// const middleware = require('./middleware/middleware');

app.use(bodyParser.json());

app.get('/', (req, res) => {
    const data = [
        { nama: "Broku", age: 52 },
        { nama: "Udin", age: 25 },
        { nama: "Rahmat", age: 20 }
    ]
    response(200, data, "get all data", res)
});

// app.use(middleware);

app.get('/home', handler)
app.get('/about', handler)
app.get('/contact', handler)

app.get('/dashboard', (req, res) => {
    res.send('dashboard oke')
});

app.get('/find:id', (req, res) => {
    const id = req.params.id;
    console.log({urlParams: req.params})
    res.send('Find params' + id )
});

app.post('/post', (req, res) => {
    console.log({requestFromOutside: req.body});
    res.send('Data posted successfully');
});

app.put('/put', (req, res) => {
    console.log({reqUpdate: req.body});
    res.send('Updated successfully');
})

app.listen(port, () => console.log(`Server listening on ${port}`));