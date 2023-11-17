const handler = (req, res) => {
    res.send('Ini adalah halaman utama');
}
const handleHome = (req, res) => {
    res.send('Ini adalah Home');
}

const handleContact = (req, res) => {
    res.send('Ini adalah contact');
};

const handleAbout = (req, res) => {
    res.send('Ini adalah about');
};

const handleNews = (req, res) => {
    res.send('Ini adalah news');
};

module.exports = {
    handler,
    handleHome,
    handleContact,
    handleAbout,
    handleNews
}