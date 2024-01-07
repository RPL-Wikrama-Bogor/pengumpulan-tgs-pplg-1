const testFunction = () => {
	console.log('This is a test function')
};

const newFunction = (msg) => {
	console.log(msg);
};

const delay = () => {
	return new Promise((resolve, reject) => {
		setTimeout(() => {
			resolve('Selamat datang...');
			reject('Nabrak cewe cantik :3');
		}, 3000);
	})
}

module.exports = {
	testFunction,
	newFunction,
	delay
};
