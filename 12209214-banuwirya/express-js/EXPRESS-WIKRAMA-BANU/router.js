const handleHome = (req, res) => {
    res.send('<h1>this is home</h1>');
};
const handleContact = (req, res) => {
    res.send('<h1>this is contact</h1>');
};

const handleAbout = (req, res) => {
    res.send('<h1>thi is about</h1>');
};

const handleNews = (req, res) => {
    res.send('<h1>this is news</h1>');
};

module.exports= {
    handleHome,
    handleContact,
    handleAbout,
    handleNews
};