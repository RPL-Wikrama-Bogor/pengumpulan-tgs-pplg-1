const http = require('http');
const port = 2200;
const { delay, testFunction, newFunction } = require('./function');

var server = http.createServer(async (req, res) => {
	switch (req.url) {
		case '/':
			console.log('Sata otw');
			const val = await delay()
			console.log(val);
			console.log('Ngopi...');
			res.write('this is First Page');
			res.end();
			break;
		case '/about':
			newFunction("This is params");
			testFunction();
			res.write('this is about page');
			res.end();
			break;
		default:
			res.write('404 Page Not Found');
			res.end();
	}
});


server.listen(port, () => console.log(`Server running at port ${port}`));


