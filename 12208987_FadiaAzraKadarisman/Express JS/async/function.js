const testFunction =  () => {
    console.log('Saya berasal dari function.js');
};

const newFunction = (message) => {
    console.log(message);
};

// multiple export
module.exports = {
    testFunction,
    newFunction
} 