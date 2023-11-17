const handler = (req, res) => {
    res.send('<h3>welcome to express</h3>')
};
const handleHome = (req, res) => {
    res.send('<h3>ini home</h3>')
};
const handleAbout = (req, res) => {
    res.send('<h3>ini about</h3>')
};
const handleContact = (req, res) => {
    res.send('<h3>ini contact</h3>')
};
const handleNews = (req,res ) => {
    res.send('<h3>ini news</h3>')

};

module.exports = {
    handler,
    handleHome,
    handleAbout,
    handleContact,
    handleNews
}