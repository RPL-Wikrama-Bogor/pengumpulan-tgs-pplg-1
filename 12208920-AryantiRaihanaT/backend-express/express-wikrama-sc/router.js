
const handleHome = (req, res) => {
    res.send('Selamat Datang!');
};

const handleAbout = (req, res) => {
    res.send('Halaman About');
};

const handleContact = (req, res) => {
    res.send('Halaman Contact');
};

const handleNews = (req, res) => {
    res.send('Halaman News');
};

module.exports = {handleHome, handleAbout, handleContact, handleNews}