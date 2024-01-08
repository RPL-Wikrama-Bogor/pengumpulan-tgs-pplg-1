const handler = (req,res) => {
    res.send('<h1>welcome to Express</h1>');
};
const handlerHome = (req,res) => {
    res.send('<h1>welcome to Home</h1>');
};
const handlerAbout = (req,res) => {
    res.send('<h1>About</h1>');
};
const handlerContact = (req,res) => {
    res.send('<h1>Contact</h1>');
};
const handlerNews = (req,res) => {
    res.send('<h1>News</h1>');
};


// const router = ((req, res) => {
//     switch(req, res){
//         case '/':
//             res.send('<h1>Hello Express<h1/>')
//             break;
//         case '/home':
//             res.send('<h1>Hello Express<h1/>')
//             break;
//         case '/about':
//             res.send('<h1>Hello About<h1/>')
//             break;
//         case '/contact':
//             res.send('<h1>Hello Contact<h1/>')
//             break;
//         case '/news':
//             res.send('<h1>Hello News<h1/>')
//             break;
//     }
// })

module.exports = {
    handler,
    handlerHome,
    handlerAbout,
    handlerContact,
    handlerNews

};