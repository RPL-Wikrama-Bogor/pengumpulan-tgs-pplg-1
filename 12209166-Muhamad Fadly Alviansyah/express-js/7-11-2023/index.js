// * 7 September 2023

const http = require('http');
const {testFunction, newFunction} = require('./function');

const printAgakTelat = () => {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      resolve('Sudah sampai');
      // reject('Saya kena tilang');
    }, 5000);
  });
}

var server = http.createServer(async (req, res) => {
  switch(req.url) {
    case '/about':
      // testFunction();
      // newFunction('BUYUNG');
      console.log('saya otw');
      const value = await printAgakTelat();
      console.log(value);
      console.log('ngopi');
      // printAgakTelat().then((value) => {
      //   console.log(value);
      //   console.log('ngopi');
      // }).catch((error) => console.log(error));
      res.write('Ini about');
      res.end();
      break;
    case '/contact':
      res.write('Ini contact');
      res.end();
      break;
    default:
      res.write('404 Not Found');
      res.end();
  }

  // if(req.url == '/about') {
  //   res.write('Ini about');
  //   res.end();
  // } else if(req.url == '/contact') {
  //   res.write('Ini contact');
  //   res.end();
  // } else {
  //   res.write('404 Not Found');
  //   res.end();
  // }
});

const port = 3000;
server.listen(port, () => {
  console.log(`Server berjalan di http://localhost:${port}`);
});