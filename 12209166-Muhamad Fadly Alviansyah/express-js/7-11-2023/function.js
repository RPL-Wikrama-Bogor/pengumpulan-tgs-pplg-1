const testFunction = () => {
  console.log('Saya berasal dari function.js');
};

const newFunction = (massage) => {
  console.log(massage);
}

module.exports = {
  testFunction,
  newFunction,
};