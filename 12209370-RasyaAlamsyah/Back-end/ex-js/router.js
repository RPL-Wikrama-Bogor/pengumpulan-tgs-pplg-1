const handleFirst =  (req, res) => {
    res.send('<h1>Welcome</h1>')
};
const handleHome =  (req, res) => {
    res.send('<h1>Welcome/Home</h1>')
};
const handleAbout =  (req, res) => {
    res.send('<h1>Welcome/About</h1>')
};
const handleContact =  (req, res) => {
    res.send('<h1>Welcome/Contact</h1>')
};
const handleNews =  (req, res) => {
    res.send('<h1>Welcome/News</h1>')
};

module.exports = {
    handleFirst,
    handleHome,
    handleAbout,
    handleContact,
    handleNews
};