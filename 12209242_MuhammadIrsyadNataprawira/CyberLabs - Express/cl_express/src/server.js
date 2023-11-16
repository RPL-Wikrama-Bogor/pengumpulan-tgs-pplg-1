const express = require('express');
const app = express();
const bodyParser = require('body-parser');
const port = 3000;
const bookRouter = require('./router/books');

app.use(bodyParser.json());

app.get('/', (req, res) => {
    res.send('Welcome to my API server!');
});

// Books router
app.use('/book', bookRouter);


app.listen(port, () => console.log(`Server listening on port ${port}`));
