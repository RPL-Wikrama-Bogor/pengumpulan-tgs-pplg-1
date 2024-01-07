// Import
const express = require('express');
const {handleHome, handleAbout, handleContact, handleNews} = require('./router');

// Instansiasi
const app = express();

// HTTP Method: GET, POST, PUT/PATCH, DELETE

// URL Root
app.get('/', handleHome );
app.get('/home', handleHome);
app.get('/about', handleAbout);
app.get('/contact', handleContact);
app.get('/news', handleNews);

app.listen(3000, () => {
  console.log(`Server berjalan di http://localhost:3000`);
});