const handler = (req, res) => {
    res.send('<h1>Welcome to express</h1>');
}
const handleHome = (req, res) => {
    res.send('Home');
}
const handleAbout = (req, res) => {
    res.send('About');
}
const handleContact = (req, res) => {
    res.send('Contact');
}
const handleNews = (req, res) => {
    res.send('News');
}

module.exports = {
    handler,
    handleHome,
    handleAbout,
    handleContact,
    handleNews,
};