const home = (req, res) => {
    res.send('<h1>Ini Home</h1>');

}
const contact = (req, res) => {
    res.send('<h1>Ini contact</h1>');
}

const about = (req, res) => {
    res.send('<h1>Ini about</h1>');
}

const news = (req, res) => {
    res.send('<h1>Ini news</h1>');
}

module.exports = {
    home,
    contact,
    about,
    news
}