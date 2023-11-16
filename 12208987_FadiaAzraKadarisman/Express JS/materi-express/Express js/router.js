const handler = (req, res) => {
    res.send('<h1>Welcome to Express</h1>'); // send = dikirim atau dirender sebagai html
}
const handleContact = (req, res) => {
    res.send('<h1>Ini Contact</h1>'); 
};
const handleHome = (req, res) => {
    res.send('<h1>Ini Home</h1>'); 
};
const handleAbout = (req, res) => {
    res.send('<h1>Ini About</h1>'); 
};
const handleBlog = (req, res) => {
    res.send('<h1>Ini Blog</h1>'); 
};
module.exports = {
    handler,
    handleContact,
    handleHome,
    handleAbout,
    handleBlog
} 