const handlerHome = (req, res) => {
    res.send('<h1>welcome to Home</h1>');
}
const handlerAbout = (req, res) => {
    res.send('<h1>welcome to About</h1>');
}
const handlerContact = (req, res) => {
    res.send('<h1>welcome to Contact</h1>');
}
const handlerNews = (req, res) => {
    res.send('<h1>welcome to News</h1>');
}

module.exports = {
    handlerHome,
    handlerAbout,
    handlerContact,
    handlerNews
}