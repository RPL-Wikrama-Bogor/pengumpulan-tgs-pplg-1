const handleHome = (req, res) => {    
    res.send('<h1 style="text-align: center;">Welcome to Home</h1>');
    res.end();
};
const handleAbout = (req, res) => {    
    res.send('<h1 style="text-align: center;">Welcome to About</h1>')
    res.end();
};
const handleContact = (req, res) => {    
    res.send('<h1 style="text-align: center;">Welcome to Contact</h1>')
    res.end();
};
const handleService = (req, res) => {    
    res.send('<h1 style="text-align: center;">Welcome to Service</h1>')
    res.end();
};
const handlePhone = (req, res) => {    
    res.send('<h1 style="text-align: center;">Welcome to Phone</h1>')
    res.end();
};
const handleSlace = (req, res) => {    
    res.send('<h1 style="text-align: center;">Welcome to Indonesia</h1>')
    res.end();
};

module.exports = {
    handleHome,
    handleAbout,
    handleContact,
    handleService,
    handlePhone,
    handleSlace,
};
