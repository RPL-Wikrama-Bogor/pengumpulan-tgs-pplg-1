const http = require('http');
const port = 6969;
const {testFunction, newFunction, agakTelat} = require('./function.js');

const server = http.createServer(async(req, res) => {
    if(req.url == '/'){
        testFunction()
        newFunction("Ini new function")
        console.log('Sorry Bro')
        const value = await agakTelat()
        console.log(value)

        res.end('Welcome to our home page'); 
    }
    else if(req.url == '/about'){
        res.end('Here is our short history');
    }
    else{
        res.end(`
            <h1>Oops!</h1>
            <p>We can't seem to find the page you are looking for</p>
            <a href="/">Back Home</a>
        `);
    }
});

server.listen(port, () => {
    console.log(`Server running on port ${port}`);
});